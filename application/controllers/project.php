<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function page($offset = 0)
	{	//Select all projects


		//Load pagination library
		$this->load->library('pagination');
		
		//Set config settings for pagination
		$config['base_url'] = "http://portfolio/projects/page";
		$config['total_rows'] = 5;
		$config['per_page'] = 2;


		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="prev">';
		$config['next_tag_close'] = '</li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="next">';
		$config['prev_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
	
		$data['page_title'] = "Projects";

		$posts = $this->_getProjects($config['per_page'], $offset);
		if($posts){
			$data['posts'] = $posts;
		}else{
			$this->load->view('error_404_view');
		}

		$data['categories'] = $this->_getCategories();
		$data['months'] =array('01'=>'january','02'=>'february','03'=>'march','04'=>'april','05'=>'may','06'=>'iune','07'=>'july','08'=>'august','09'=>'september','10'=>'october','11'=>'november','12'=>'december');
		$data['nav_item'] = "work";
		$this->load->view('header_view', $data);
		$this->load->view('list_view', $data);
		$this->load->view('footer_view');
	}
	
	public function project_by_title($title)
	{
		//Select project by title
		
		$project = $this->_getProject($title);

		if($project){
			$data['page_title'] = str_replace("_"," ",$project->post_title);
			$data['nav_item'] = "work";
			//make a helper to get the name of the month when given the number of the month
			
			$date = explode("-",$project->post_date);
			$months =array('01'=>'january','02'=>'february','03'=>'march','04'=>'april','05'=>'may','06'=>'iune','07'=>'july','08'=>'august','09'=>'september','10'=>'october','11'=>'november','12'=>'december');
			
			$data['project']['thumb'] = $project->post_thumb;
			$data['project']['date']['day'] = substr($date[2], 0,2);
			$data['project']['date']['month'] = $months[$date[1]];
			$data['project']['date']['year'] = $date[0];

			$data['project']['meta']['id'] = 3;
			$data['project']['meta']['link'] = "http://www.danielmois.com";

			//get the category title from the categories table not the name of the category
			
			$data['project']['meta']['category'] = $project->cat_title;
			$data['project']['meta']['client'] = "Myself";
			$data['project']['meta']['tags'] = json_decode($project->post_terms, true);

			$data['project']['data']['teaser'] = $project->post_teaser;

			$data['project']['data']['body'] = $project->post_content;

			$data['categories'] = $this->_getCategories();
			
			$this->load->view('header_view', $data);
			$this->load->view('project_view', $data);
			$this->load->view('footer_view');
		}else{
			$this->load->view('error_404_view');
		}
		
	}

	private function _getProjects($limit, $offset)
	{
		$this->load->model('Project_model');
		
		$results = $this->Project_model->getProjects($limit, $offset);
		foreach($results->result() as $project_item){
			
			$projects[] = $project_item;
		}
		
		if(isset($projects)){
			return $projects;
		}else{
			return false;
		}
	}

	/*private function _getProject($title)
	{	
		//check if there is an item with that title in the first place
		$this->load->model('Project_model');
		
		$results = $this->Project_model->getProject($title);

		$project = $results->result();

		if(isset($project)){
			return $project[0];
		}else{
			return false;
		}

	}*/
	
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

/* End of file project.php */
/* Location: ./application/controllers/project.php */