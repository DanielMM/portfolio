<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index()
	{	//Select all projects
		$data['page_title'] = "Projects";
		$data['item']['project1']['title'] = "Project of all times";
		$data['item']['project1']['thumb'] = "img.png";
		$data['item']['project1']['thumb'] = "<img class=\"thumb\" src=".asset_url('img').$data['item']['project1']['thumb']." width=\"170\" height=\"170\" alt=\"{$data['item']['project1']['title']}\" title=\"{$data['item']['project1']['title']}\" />";
		$data['item']['project1']['date']['day'] = 2;
		$data['item']['project1']['date']['month'] = "oct";
		$data['item']['project1']['date']['year'] = 2010;
		$data['item']['project1']['url_title'] = url_title($data['item']['project1']['title'],"underscore");
		$data['item']['project1']['teaser'] = "est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magnailla eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia";

		$data['item']['project2']['title'] = "Javascript is a must";
		$data['item']['project2']['thumb'] = "img.png";
		$data['item']['project2']['thumb'] = "<img class=\"thumb\" src=".asset_url('img').$data['item']['project2']['thumb']." width=\"170\" height=\"170\" alt=\"{$data['item']['project2']['title']}\" title=\"{$data['item']['project2']['title']}\" />";
		$data['item']['project2']['date']['day'] = 22;
		$data['item']['project2']['date']['month'] = "mar";
		$data['item']['project2']['date']['year'] = 2011;
		$data['item']['project2']['url_title'] = url_title($data['item']['project2']['title'],"underscore");
		$data['item']['project2']['teaser'] = "ideo illa eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia";

		$this->load->view('header_view', $data);
		$this->load->view('projects_list_view');
		$this->load->view('footer_view');
	}
	
	public function project_by_title($title)
	{
		//Select project by title
		$data['page_title'] = str_replace("_"," ",$title);
		//$data['title'] = str_replace("_"," ",$title);
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
	
}

/* End of file project.php */
/* Location: ./application/controllers/project.php */