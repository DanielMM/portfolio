<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller {

	public function index()
	{	//Select all projects
		
	}
	function file($file_name)
	{
		$file_name = $this->security->sanitize_filename($file_name, TRUE);
		$this->load->helper('download');
		$path = asset_url('download') . $file_name;
		$file_is = is_readable("assets/download/".$file_name);

		if($file_is){
			$data['file_data'] 	= file_get_contents($path); 
			$data['file_name']	= $file_name;
			
			$data['title'] =  'daniel_mois_cv.pdf';
			$data['download_feedback'] = "Your download will start very soon!";
		}else{
			$data['title'] =  'File not found!';
			$data['download_feedback'] = "The file ".$file_is." was not found, sorry for the inconvenience!";
		}
		$data['test'] = 'test';

		$this->load->view('header_view', $data);
		$this->load->view('download_view', $data);
		$this->load->view('footer_view');
	}
	
}

/* End of file download.php */
/* Location: ./application/controllers/download.php */