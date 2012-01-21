<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index()
	{
		$data['page_title'] 	= "Nada";

		$this->load->view('header_view', $data);
		$this->load->view('list_view', $data);
		$this->load->view('footer_view');
	}

	public function category($category){
		$data['page_title'] 	= "Category: ".$category;

		//Select all posts that belong to a category
				
		if($this->_getCategories()){
			$data['categories'] = $this->_getCategories();
		}

		$posts = $this->_getPostsByCategory($category);

		if($posts){
			$data['posts'] = $posts;
		}else{
			$this->load->view('error_404_view', $data);
		}
		$data['months'] =array('01'=>'january','02'=>'february','03'=>'march','04'=>'april','05'=>'may','06'=>'iune','07'=>'july','08'=>'august','09'=>'september','10'=>'october','11'=>'november','12'=>'december');
		
		$this->load->view('header_view', $data);
		$this->load->view('list_view', $data);
		$this->load->view('footer_view');
	}

	public function tag($tag){
		$data['page_title'] 	= "Tag: ".$tag;

		//Select all posts that have the tag
				
		if($this->_getCategories()){
			$data['categories'] = $this->_getCategories();
		}

		$posts = $this->_getPostsByTag($tag);
		//var_dump($posts);

		if($posts){
			$data['posts'] = $posts;
		}else{
			$this->load->view('error_404_view');
		}
		$data['months'] =array('01'=>'january','02'=>'february','03'=>'march','04'=>'april','05'=>'may','06'=>'iune','07'=>'july','08'=>'august','09'=>'september','10'=>'october','11'=>'november','12'=>'december');
		
		$this->load->view('header_view', $data);
		$this->load->view('list_view', $data);
		$this->load->view('footer_view');
	}

	private function _getPostsByTag($tag)
	{
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPostsByTag($tag);
		foreach($results->result() as $post){
			
			$posts[] = $post;
		}
		if(isset($posts)){
			return $posts;
		}else {
			return false;
		}
	}

	private function _getPostsByCategory($category)
	{
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPostsByCategory($category);
		foreach($results->result() as $post){
			
			$posts[] = $post;
		}
		if(isset($posts)){
			return $posts;
		}else {
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

/* End of file post.php */
/* Location: ./application/controllers/post.php */