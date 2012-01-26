<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function page($offset = 0)
	{	//Select all articles
		$data['page_title'] = "Blog";
		
		if($this->_getCategories()){
			$data['categories'] = $this->_getCategories();
		}

		//Load pagination library
		$this->load->library('pagination');
		
		//Set config settings for pagination
		$config['base_url'] = "http://portfolio/articles/page";
		$config['total_rows'] = 5;
		$config['per_page'] = 2;
		
		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="next" title="Previous">';
		$config['prev_tag_close'] = '</li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="prev" title="Next">';
		$config['next_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$posts = $this->_getArticles($config['per_page'], $offset);
		if($posts){
			$data['posts'] = $posts;

			$data['months'] =array('01'=>'january','02'=>'february','03'=>'march','04'=>'april','05'=>'may','06'=>'iune','07'=>'july','08'=>'august','09'=>'september','10'=>'october','11'=>'november','12'=>'december');
			$data['nav_item'] = "blog";


			$this->load->view('header_view', $data);
			$this->load->view('list_view', $data);
			$this->load->view('footer_view');
		
		}else{
			$this->load->view('error_404_view',$data);
		}

	}

	public function article_by_title($title){

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('url', 'url', 'trim');
		$this->form_validation->set_rules('comment', 'comment', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
		
			$article = $this->_getArticle($title);
			
			$data['headers']['css'][] = "<link type=\"text/css\" rel=\"stylesheet\" href=\"".asset_url('css')."desert.css\" media=\"screen\" />";

			$data['headers']['js'][] = "<script src=". asset_url('js')."prettify.js></script>";
			$data['headers']['js'][] = "<script src=". asset_url('js')."main.js></script>";


			if($article){
				$data['page_title'] = str_replace("_"," ",$article->post_title);

				if($article->post_category == 'project'){
					$data['nav_item'] = "work";
				}else{
					$data['nav_item'] = "blog";
				}

				$data['categories'] = $this->_getCategories();

				$date = explode("-", $article->post_date);

				$months =array('01'=>'january','02'=>'february','03'=>'march','04'=>'april','05'=>'may','06'=>'iune','07'=>'july','08'=>'august','09'=>'september','10'=>'october','11'=>'november','12'=>'december');
				
				$data['article']['link'] = $article->post_title;
				$data['article']['post_type'] = $article->post_type;
				$data['article']['post_id'] = $article->post_id;

				$data['article']['date']['day'] = substr($date[2], 0,2);
				$data['article']['date']['month'] = $months[$date[1]];
				$data['article']['date']['year'] = $date[0];

				$data['article']['post_category'] = $article->post_category;
				$data['article']['post_terms'] = json_decode($article->post_terms, true);
				
				$data['article']['post_thumb'] = $article->post_thumb;
				$data['article']['post_content'] = $article->post_content;
				$data['article']['post_teaser'] = $article->post_teaser;

				$post_settings = json_decode($article->post_settings, true);
				
				if($post_settings){
					foreach ($post_settings as $key => $value) {
						$data['article']['post_settings'][$key]  = $value;
					}
				}
				$this->load->library('comments');
				$data['article']['post_comments'] = $this->comments->getComments($article->post_id);
				
				$this->load->view('header_view', $data);
				$this->load->view('article_view', $data);
				$this->load->view('footer_view');

			}else{
				$this->load->view('error_404_view');
			}


		

		}else{
			//var_dump($this->input->post());
			//$this->load->library('comments');
			$this->comments->addComment($this->input->post());
			
		}
	}

	private function _getArticle($title)
	{	
		//check if there is an item with that title in the first place
		$this->load->model('Blog_model');
		
		$results = $this->Blog_model->getArticle($title);

		$article = $results->result();

		//Check if there is an article with this title
		if(array_key_exists(0, $article)){
			return $article[0];
		}else{
			return false;
		}
	}

	private function _getArticles($limit, $offset)
	{
		
		$this->load->model('Blog_model');
		
		$results = $this->Blog_model->getArticles($limit, $offset);
		foreach($results->result() as $article_item){
			
			$articles[] = $article_item;
		}
		if(isset($articles)){
			return $articles;
		}else{
			return false;
		}
	}

	private function _getCategories()
	{
		
		$this->load->model('Category_model');
		$results = $this->Category_model->getCategories();
		foreach($results->result() as $cat_item){
			
			$categories[] = $cat_item;
		}
		if(isset($categories)){
			return $categories;
		}else{
			return false;
		}
	}
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */