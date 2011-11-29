<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$data['title'] = "Portfolio";
		$this->load->view('landing_header_view', $data);
		$this->load->view('landing_welcome_view');
		$this->load->view('footer_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */