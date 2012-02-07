<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		//$data['headers'] = "<script src=". asset_url('js')."slides.min.jquery.js></script>";
		$data['title'] = "Welcome";

		$data['categories'] = $this->_getCategories();


		$posts = $this->_getPosts(6);
		if($posts){
			$data['posts'] = $posts;
		}else{
			//$this->load->view('error_404_view');
		}
		


		$data['months'] =array('01'=>'jan','02'=>'feb','03'=>'mar','04'=>'apr','05'=>'may','06'=>'iun','07'=>'july
		','08'=>'aug','09'=>'sep','10'=>'oct','11'=>'nov','12'=>'dec');

		$this->load->view('landing_header_view', $data);
		$this->load->view('landing_view', $data);
		$this->load->view('footer_view');
	}


	private function _getProjects()
	{
		
		$this->load->model('Project_model');
		
		$results = $this->Project_model->getProjects();
		foreach($results->result() as $project_item){
			
			$projects[] = $project_item;
		}
		
		if(isset($projects)){
			return $projects;
		}else{
			return false;
		}
	}

	private function _getPosts($limit)
	{
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPosts($limit);
		foreach($results->result() as $post){
			
			$posts[] = $post;
		}
		
		if(isset($posts)){
			return $posts;
		}else{
			return false;
		}
	}

	private function _getPostsByCategory($category, $limit)
	{
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPostsByCategory($category, $limit);
		foreach($results->result() as $post){
			
			$posts[] = $post;
		}
		
		if(isset($posts)){
			return $posts;
		}else{
			return false;
		}
	}

	private function _getPostsByType($type, $limit)
	{
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPostsByType($type, $limit);
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */