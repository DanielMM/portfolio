<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }

	public function getPostsByTag($tag)
	{
		$this->db->select('*','categories.cat_title','categories.cat_name');
        $this->db->from('posts');
        $this->db->join('categories', 'posts.post_category = categories.cat_name');
        $this->db->like(array('post_status'=>'published','post_terms'=>$tag));
        $this->db->order_by('post_date', 'desc');
        $results = $this->db->get();
		return $results;
	}

	public function getPostsByCategory($category){
        $this->db->select('*','categories.cat_title','categories.cat_name');
        $this->db->from('posts');
        $this->db->join('categories', 'posts.post_category = categories.cat_name');
        $this->db->where(array('post_status'=>'published','post_category'=>$category));
        $this->db->order_by('posts.post_date', 'desc');

        $results = $this->db->get();
		return $results;    	
    }

}