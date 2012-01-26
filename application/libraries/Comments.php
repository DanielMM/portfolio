<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments {
    public $comm;
    /*public $comm_id;
    public $comm_parent_id;
    public $comm_date;
    public $comm_author;
    public $comm_content;*/

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
    	
    	$this->CI->comments_model->insertComment($data);
    }

    public function getComments($article_id){
    	$comments = $this->CI->comments_model->getComments($article_id);

    	if(count($comments->result()) > 0){
	    	//$comments = $comments->result();

            foreach ($comments->result() as $comment) {
                $this->comm[$comment->comm_id]['comm_id'] = $comment->comm_id;
                $this->comm[$comment->comm_id]['comm_parent_id'] = $comment->parent_id;
                $this->comm[$comment->comm_id]['comm_date'] = $comment->comm_date;

                $author_data = json_decode($comment->comm_author, TRUE);
                
                $this->comm[$comment->comm_id]['comm_author_name'] = $author_data['name'];
                $this->comm[$comment->comm_id]['comm_author_email'] = $author_data['email'];
                $this->comm[$comment->comm_id]['comm_author_url'] = prep_url($author_data['url']);

                $this->comm[$comment->comm_id]['comm_content'] = $comment->comm_content;
            }
	    	
	    	return $this->comm;
    	}else{
    		return false;
    	}


    }

    public function getCommentsCount($article_id)
    {
        $comm_count = $this->CI->comments_model->getCommentsCount($article_id);
        if($comm_count > 0){
            if($comm_count == 1){
                return $comm_count." comment";
            }else{
                return $comm_count." comments";
            }
        }else{
            return "No comments";
        }

    }
}
/*End of Comments.php*/