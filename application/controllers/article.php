<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public function page($offset = 0)
	{	//Select all articles

		$data['page_title'] = "Articles";

		$data['meta_description'] = "A list of my articles on web development topics groupped in several categories: tutorials, quicktips, tools and questions.";
		
		$data['nav_item'] = "blog";
		
		if($this->_getCategories()){
			$data['categories'] = $this->_getCategories();
		}

		//Load pagination library
		$this->load->library('pagination');
		
		//Set config settings for pagination
		$config['base_url'] = "http://portfolio/articles/page";
		$config['per_page'] = 5;
		
		$posts = $this->_getArticles($config['per_page'], $offset);

		$config['total_rows'] = $posts['count'];

		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="first">';
		$config['first_tag_close'] = '</li>';

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

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="last">';
		$config['last_tag_close'] = '</li>';

	
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		if($posts['data']){
			
			$data['posts'] = $posts['data'];

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

			if($article){
				$data['page_title'] = str_replace("_"," ",$article->post_title);

				$data['nav_item'] = "blog";

				$data['categories'] = $this->_getCategories();

				$date = explode("-", $article->post_date);

				$data['article']['link'] = $article->post_title;
				$data['article']['post_type'] = $article->post_type;
				$data['article']['post_id'] = $article->post_id;

				$data['article']['date']['day'] = substr($date[2], 0,2);
				$data['article']['date']['month'] = get_month($date[1]);
				$data['article']['date']['year'] = $date[0];

				$meta_info = json_decode($article->meta_content, true);
				
				if(is_array($meta_info)){
					foreach ($meta_info as $key => $value) {
						if($key == "meta_description"){
							$data['meta_description'] = $value;
						}else{
							$data['article']['post_'.$key] = $value;

							if(!isset($data['meta_description'])){
								$data['meta_description'] = $data['page_title'];
							}
						}
					}
				}else{
					$data['meta_description'] = $data['page_title'];
				}
				
				$data['article']['post_terms'] = json_decode($article->post_terms, true);

				$data['article']['post_category'] = $article->post_category;
				
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
				$comments = $this->comments->getComments($article->post_id);
				
				$data['article']['comm_count'] = $this->comments->getCommentsCount($article->post_id);
				

				if($comments){
					foreach ($comments as $key => $value) {
						$data['article']['post_comments'][$key] = $value;
					}
				}else{
					$data['article']['post_comments'] = false;
				}

				$this->load->view('header_view', $data);
				$this->load->view('article_view', $data);
				$this->load->view('footer_view');

			}else{
				$this->load->view('error_404_view');
			}


		

		}else{
			//var_dump($this->input->post());
			$this->load->library('comments');
			$this->comments->addComment($this->input->post());
			
		}
	}

	private function _getArticle($title)
	{	
		//check if there is an item with that title in the first place
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPostByTitle($title);

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
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPosts($limit, $offset);
		foreach($results->result() as $article_item){
			
			$articles['data'][] = $article_item;
		}

		$count_results = $this->Post_model->getPosts('all', $offset);

		$articles['count'] = $count_results->num_rows();
		 

		if(isset($articles['data'])){
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
/* Location: ./application/controllers/article.php */