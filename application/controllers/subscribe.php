<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	public function index()
	{	
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[subscribe.email]');

		if ($this->form_validation->run() == FALSE)
		{
			$data['page_title'] 		= "Error during the subscription process";
			$data['feedback']			= false;
			$data['feedback_message']	= "An error occured during the subscription process, please try again.";
			$data['source'] 			= $this->input->post('source', TRUE);

			$this->load->view('subscribe_view', $data);
		}
		else
		{
			$email = $this->input->post('email_subscriber', TRUE);

			$subscriber = array('email'=> $email);
			$this->db->insert('subscribe', $subscriber);

			$data['email']				= $email;
			$data['page_title'] 		= "Successful subscription";
			$data['feedback']			= true;
			$data['feedback_message']	= "Thank you for subscribing with the email address: ".$email;
			$data['source'] 			= $this->input->post('source', TRUE);
			
			$this->load->view('subscribe_view', $data);
		}
	}
}

/* End of file subscribe.php */
/* Location: ./application/controllers/subscribe.php */