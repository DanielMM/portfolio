<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Countdown extends CI_Controller {

	public function index()
	{	
		$data['page_title'] = "Coming soon";
		$this->load->view('countdown_view', $data);
	}
}

/* End of file countdown.php */
/* Location: ./application/controllers/countdown.php */