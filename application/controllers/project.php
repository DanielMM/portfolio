<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function page($offset = 0)
	{	//Select all projects


		//Load pagination library
		$this->load->library('pagination');
		
		//Set config settings for pagination
		$config['base_url'] = "http://portfolio/projects/page";
		$config['per_page'] = 6;
		$config['num_links'] = 4;
		
		$posts = $this->_getProjects($config['per_page'], $offset);
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
	
		$data['page_title'] = "Projects";

		$data['meta_description'] = "Collection of my projects developed for different clients. You can visit the live version and read about the process behind each one along with more technical details.";

		if($posts['data']){
			$data['posts'] = $posts['data'];
		}else{
			$this->load->view('error_404_view');
		}

		$data['categories'] = $this->_getCategories();

		$data['nav_item'] = "work";
		
		$this->load->view('header_view', $data);
		$this->load->view('projects_view', $data);
		$this->load->view('footer_view');
	}
	
	public function project_by_title($title)
	{
		//Select project by title
		
		$project = $this->_getProject($title);

		if($project){
			$data['page_title'] = str_replace("_"," ",$project->post_title);
			$data['nav_item'] = "work";

			$data['headers']['js'][] = "<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>";
			$data['headers']['js'][] = "<script type=\"text/javascript\" src=\"http://portfolio/assets/js/easySlider1.7.js\"></script>";

			$date = explode("-",$project->post_date);

			$thumb_info = json_decode($project->post_thumb, true);
			//var_dump($thumb_info);
			foreach ($thumb_info as $key => $value) {
				if($key == "thumb"){
					$data['project']['thumb'] = $value;
				}else{
					$data['project']['screens'][$key] = $value;
				}
			}

			$data['project']['date']['day'] = substr($date[2], 0,2);
			$data['project']['date']['month'] = get_month($date[1]);
			$data['project']['date']['year'] = $date[0];

			$meta_info = json_decode($project->meta_content, true);

			foreach ($meta_info as $key => $value) {
				if($key == "meta_description"){
					$data['meta_description'] = $value;
				}else{
					$data['project']['meta'][$key] = $value;
					
					if(!isset($data['meta_description'])){
						$data['meta_description'] = $data['page_title'];
					}
				}
			}

			$data['project']['meta']['id'] = (int)$project->post_id;

			//get the category title from the categories table not the name of the category
			
			$data['project']['meta']['category'] = $project->post_category;

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
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getProjectPosts($limit, $offset);

		foreach($results->result() as $project_item){
			
			$projects['data'][] = $project_item;
		}
		
		$count_results = $this->Post_model->getProjectPosts('all', $offset);
		
		$projects['count'] = $count_results->num_rows();
		
		if(isset($projects['data'])){
			return $projects;
		}else{
			return false;
		}
	}

	private function _getProject($title)
	{	
		//check if there is an item with that title in the first place
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getProjectPost($title);

		$project = $results->result();
		//var_dump($project);
		if(isset($project)){
			return $project[0];
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

/* End of file project.php */
/* Location: ./application/controllers/project.php */