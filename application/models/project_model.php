<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function getProjects(){
    	
    	$results = $this->db->get('projects');
		return $results;    	
    }

    public function getProject($post_title)
    {	
        //SELECT * , ct.cat_title FROM projects AS pr JOIN categories AS ct ON pr.post_category = ct.cat_name

        $this->db->select('*','categories.cat_title');
        $this->db->from('projects');
        $this->db->join('categories', 'projects.post_category = categories.cat_name');
    	$this->db->where(array('post_title'=>$post_title));
        $results = $this->db->get();
		return $results;    	
    }
}