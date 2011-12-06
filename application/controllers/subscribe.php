<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	public function index()
	{	
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[subscribe.email]');

		if ($this->form_validation->run() == FALSE)
		{
			$data['page_title'] 	= "Error during the subscription process";
		
			$this->load->view('countdown_view', $data);
		}
		else
		{
			$email = $this->input->post('email', TRUE);

			$subscriber = array('email'=> $email);
			$this->db->insert('subscribe', $subscriber);

			$data['email']			= $email;
			$data['feedback']		= "Thank you for subscribing with the email address: ".$email;
			$data['page_title'] 	= "Successful subscription";
		
			$this->load->view('countdown_view', $data);
		}
	}
}

/* End of file subscribe.php */
/* Location: ./application/controllers/subscribe.php */