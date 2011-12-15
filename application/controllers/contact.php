<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['page_title'] 	= "Contact ";
		
		$this->load->view('header_view', $data);
		$this->load->view('contact_view', $data);
		$this->load->view('footer_view');
	}

	public function sendmessage()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('message', 'message', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['page_title'] 	= "Contact ";

			$this->load->view('header_view', $data);
			$this->load->view('contact_view', $data);
			$this->load->view('footer_view');
		}
		else
		{
			$this->load->library('email');
			
			$name = $this->input->post('name', TRUE);
			$email = $this->input->post('email', TRUE);
			$message = $this->input->post('message', TRUE);

			$this->email->from($email, $name);
			$this->email->to('daniel@danielmois.com');  

			$this->email->subject($name);
			$this->email->message($message);	

			$delivered = $this->email->send();

			if($delivered){
				$data['success']		= "Message sent successfuly!";
				$data['feedback']		= true;
				$data['page_title'] 	= "Message sent successfuly - Contact ";	
			}else{
				$data['error']			= "Error sending message, please try again!";
				$data['feedback']		= false;
				$data['page_title'] 	= "Error sending message - Contact ";	
			}
		
			$this->load->view('header_view', $data);
			$this->load->view('contact_view', $data);
			$this->load->view('footer_view');
		}
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */