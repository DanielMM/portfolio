<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$data['headers'] = "<script src=". asset_url('js')."slides.min.jquery.js></script>";
		$data['title'] = "Portfolio";

		$data['categories'] = $this->_getCategories();


		$projects = $this->_getPostsByCategory('project',3);;
		if($projects){
			$data['projects'] = $projects;
		}else{
			//$this->load->view('error_404_view');
		}

		$tutorials = $this->_getPostsByCategory('tutorial',3);
		if($tutorials){
			$data['tutorials'] = $tutorials;
		}else{
			//$this->load->view('error_404_view');
		}
		
		$quicktips = $this->_getPostsByCategory('quicktip',3);
		if($quicktips){
			$data['quicktips'] = $quicktips;
		}else{
			//$this->load->view('error_404_view');
		}

		$questions = $this->_getPostsByCategory('question',3);
		if($questions){
			$data['questions'] = $questions;
		}else{
			//$this->load->view('error_404_view');
		}


		$data['months'] =array('01'=>'january','02'=>'february','03'=>'march','04'=>'april','05'=>'may','06'=>'iune','07'=>'july','08'=>'august','09'=>'september','10'=>'october','11'=>'november','12'=>'december');

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

	private function _getPostsByCategory($category, $limit)
	{
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPostsByCategory($category);
		foreach($results->result() as $post){
			
			$posts[] = $post;
		}
		if(isset($posts)){
			return $posts;
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */