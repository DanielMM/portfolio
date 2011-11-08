<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personal extends CI_Controller {

	public function index()
	{
		$data['title'] 	= "My life";
		$data['age'] 	= date('Y') - 1987;
		
		$this->load->view('header_view', $data);
		$this->load->view('personal_view', $data);
		$this->load->view('footer_view');
	}
}

/* End of file personal.php */
/* Location: ./application/controllers/personal.php */