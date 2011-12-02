<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index()
	{	//Select all projects
		$data['page_title'] = "Projects";

		$data['projects'] = $this->_getProjects();
		
		$data['categories'] = $this->_getCategories();

		$this->load->view('header_view', $data);
		$this->load->view('projects_list_view', $data);
		$this->load->view('footer_view');
	}
	
	public function project_by_title($title)
	{
		//Select project by title
		
		$project = $this->_getProject($title);

		$data['page_title'] = str_replace("_"," ",$project->post_title);

		//make a helper to get the name of the month when given the number of the month
		
		$date = explode("-",$project->post_date);
		$months =array('01'=>'ian','02'=>'feb','03'=>'mar','04'=>'apr','05'=>'may','06'=>'iun','07'=>'iul','08'=>'aug','09'=>'sep','10'=>'oct','11'=>'nov','12'=>'dec');
		
		$data['project']['date']['day'] = $date[2];
		$data['project']['date']['month'] = $months[$date[1]];
		$data['project']['date']['year'] = $date[0];

		$data['project']['meta']['id'] = 3;
		$data['project']['meta']['link'] = "http://www.example.com";

		//get the category title from the categories table not the name of the category
		
		$data['project']['meta']['category'] = $project->cat_title;
		$data['project']['meta']['client'] = "Example Ltd. Co";
		$data['project']['meta']['tags'] = json_decode($project->post_terms);

		$data['project']['data']['teaser'] = $project->post_teaser;

		$data['project']['data']['body'] = $project->post_content;

		$data['categories'] = $this->_getCategories();
		
		$this->load->view('header_view', $data);
		$this->load->view('project_view', $data);
		$this->load->view('footer_view');
	}
	
	public function category($category)
	{
		//Select all projects beloging to one category
		$data['page_title'] = $category;
		$this->load->view('header_view', $data);
		$this->load->view('projects_list_view', $data);
		$this->load->view('footer_view');
	}
	
	public function tag($tag)
	{
		//Select all projects beloging to one category
		$data['title'] = $tag;
		$this->load->view('header_view', $data);
		$this->load->view('tag_view', $data);
		$this->load->view('footer_view');
	}

	private function _getProjects()
	{
		
		$this->load->model('Project_model');
		
		$results = $this->Project_model->getProjects();
		foreach($results->result() as $project_item){
			
			$projects[] = $project_item;
		}
		//var_dump($projects);
		return $projects;

	}

	private function _getProject($title)
	{	
		//check if there is an item with that title in the first place
		$this->load->model('Project_model');
		
		$results = $this->Project_model->getProject($title);

		$project = $results->result();

		//var_dump($project[0]);
		return $project[0];

	}
	
	private function _getCategories()
	{
		
		$this->load->model('Category');
		$results = $this->Category->getCategories();
		foreach($results->result() as $cat_item){
			
			$categories[] = $cat_item;
		}
		//var_dump($categories);
		return $categories;
	}
	
}

/* End of file project.php */
/* Location: ./application/controllers/project.php */