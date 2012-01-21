<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{	//Select all articles
		$data['page_title'] = "Blog";

		if($this->_getArticles()){
			$data['posts'] = $this->_getArticles();
		}else{
			$this->load->view('error_404_view');
		}

		if($this->_getCategories()){
			$data['categories'] = $this->_getCategories();
		}

		$data['months'] =array('01'=>'january','02'=>'february','03'=>'march','04'=>'april','05'=>'may','06'=>'iune','07'=>'july','08'=>'august','09'=>'september','10'=>'october','11'=>'november','12'=>'december');
		$data['nav_item'] = "blog";


		$this->load->view('header_view', $data);
		$this->load->view('list_view', $data);
		$this->load->view('footer_view');
	}

	public function article_by_title($title){
		$article = $this->_getArticle($title);
		
		$data['headers']['css'][] = "<link type=\"text/css\" rel=\"stylesheet\" href=\"".asset_url('css')."desert.css\" media=\"screen\" />";
		$data['headers']['js'][] = "<script src=". asset_url('js')."prettify.js></script>";


		if($article){
			$data['page_title'] = str_replace("_"," ",$article->post_title);
			$data['nav_item'] = "blog";
			$data['categories'] = $this->_getCategories();
			$date = explode("-", $article->post_date);
			$months =array('01'=>'january','02'=>'february','03'=>'march','04'=>'april','05'=>'may','06'=>'iune','07'=>'july','08'=>'august','09'=>'september','10'=>'october','11'=>'november','12'=>'december');

			$data['article']['date']['day'] = substr($date[2], 0,2);
			$data['article']['date']['month'] = $months[$date[1]];
			$data['article']['date']['year'] = $date[0];

			$data['article']['post_category'] = $article->post_category;
			$data['article']['post_terms'] = json_decode($article->post_terms, true);
			
			$data['article']['post_thumb'] = $article->post_thumb;
			$data['article']['post_content'] = $article->post_content;
			$data['article']['post_teaser'] = $article->post_teaser;

			$this->load->view('header_view', $data);
			$this->load->view('article_view', $data);
			$this->load->view('footer_view');

		}else{
			$this->load->view('error_404_view');
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

	private function _getArticles()
	{
		
		$this->load->model('Blog_model');
		
		$results = $this->Blog_model->getArticles();
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