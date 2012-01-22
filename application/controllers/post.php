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

	public function tag($tag, $offset = 0){
		$data['page_title'] 	= "Tag: ".$tag;

		//Select all posts that have the tag
				
		if($this->_getCategories()){
			$data['categories'] = $this->_getCategories();
		}

		//Load pagination library
		$this->load->library('pagination');
		
		//Set config settings for pagination
		$config['base_url'] = "http://portfolio/tag/".$tag."/page";
		$config['total_rows'] = 10;
		$config['per_page'] = 2;
		$config['num_links'] = 2;
		$config['uri_segment'] = 4;


		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
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
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';


		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$posts = $this->_getPostsByTag($tag, $config['per_page'], $offset);
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

	private function _getPostsByTag($tag, $limit, $offset)
	{
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPostsByTag($tag, $limit, $offset);
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