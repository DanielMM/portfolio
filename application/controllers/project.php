<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index()
	{	//Select all projects
		$data['title'] = "Projects";
		$this->load->view('header_view', $data);
		$this->load->view('projects_view');
		$this->load->view('footer_view');
	}
	
	public function project_by_title($title)
	{
		//Select project by title
		$data['title'] = $title;
		$this->load->view('header_view', $data);
		$this->load->view('project_view', $data);
		$this->load->view('footer_view');
	}
	
	public function category($category)
	{
		//Select all projects beloging to one category
		$data['title'] = $category;
		$this->load->view('header_view', $data);
		$this->load->view('category_view', $data);
		$this->load->view('footer_view');
	}
	
}

/* End of file project.php */
/* Location: ./application/controllers/project.php */