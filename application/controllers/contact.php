<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['page_title'] 	= "Contact ";
		
		
		$this->load->view('header_view', $data);
		$this->load->view('contact_view', $data);
		$this->load->view('footer_view');
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */