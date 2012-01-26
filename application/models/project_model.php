<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function getProjects($limit = 100, $offset = 0)
    {
    	
        $this->db->select('*','categories.cat_title','categories.cat_name');
        $this->db->from('posts');
        $this->db->join('categories', 'posts.post_category = categories.cat_name');
        $this->db->where(array('post_type'=>'project'));
        $this->db->order_by('post_date', 'desc');
        $this->db->limit($limit, $offset);
        $results = $this->db->get();
		return $results;    	
    }

    public function getProject($post_title)
    {	
      
        $this->db->select('*','categories.cat_title','categories.cat_name');
        $this->db->from('posts');
        $this->db->join('categories', 'posts.post_category = categories.cat_name');
    	$this->db->where(array('post_title'=>$post_title));
        $results = $this->db->get();
		return $results;    	
    }
}