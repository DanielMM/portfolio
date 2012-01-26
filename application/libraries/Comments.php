<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments {

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('comments_model');
    }

    public function addComment($post_data){
    	$this->CI->load->helper('date');
    	
    	$datestring = "%Y-%m-%d %h:%i:%s";
		$time = time();

    	$data['parent_id'] = $post_data['article_id'];
    	$data['comm_date'] = mdate($datestring, $time);
    	$data['comm_author'] = array('name'=>$post_data['name'],'email'=>$post_data['email'],'url'=>$post_data['url']);
    	$data['comm_author'] = json_encode($data['comm_author']);
    	$data['comm_content'] = $post_data['comment'];
    	
    	
    	//var_dump($data);
    	$this->CI->comments_model->insertComment($data);
    }

    public function getComments($article_id){
    	$comments = $this->CI->comments_model->getComments($article_id);
    	if(count($comments->result()) > 0){
	    	$comments = $comments->result();
	    	
	    	return $comments;
    	}else{
    		return false;
    	}


    }
}
/*End of Comments.php*/