<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		
		$data['title'] = "Welcome";

		$posts = $this->_getPosts(6);
		if($posts){
			$data['posts'] = $posts;
		}else{
			//$this->load->view('error_404_view');
		}

		$data['months'] =array('01'=>'jan','02'=>'feb','03'=>'mar','04'=>'apr','05'=>'may','06'=>'iun','07'=>'july
		','08'=>'aug','09'=>'sep','10'=>'oct','11'=>'nov','12'=>'dec');

		$this->load->view('landing_header_view', $data);
		$this->load->view('landing_view', $data);
		$this->load->view('footer_view');
	}

	private function _getPosts($limit)
	{
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPosts($limit);
		foreach($results->result() as $post){
			
			$posts[] = $post;
		}
		
		if(isset($posts)){
			return $posts;
		}else{
			return false;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */