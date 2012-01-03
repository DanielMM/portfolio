<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function getArticles(){
    	
    	//$results = $this->db->get('posts');
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where(array('post_type'=>'article', 'post_status'=>'published'));


        $results = $this->db->get();
		return $results;    	
    }

    public function getArticle($post_title)
    {	
        //SELECT * , ct.cat_title FROM projects AS pr JOIN categories AS ct ON pr.post_category = ct.cat_name

        $this->db->select('*');
        $this->db->from('posts');
    	$this->db->where(array('post_title'=>$post_title, 'post_status'=>'published'));

        $results = $this->db->get();
		return $results;    	
    }
}