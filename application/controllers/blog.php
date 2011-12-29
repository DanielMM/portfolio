<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{	//Select all projects
		$data['page_title'] = "Blog";


		$this->load->view('header_view', $data);
		$this->load->view('list_view', $data);
		$this->load->view('footer_view');
	}
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */