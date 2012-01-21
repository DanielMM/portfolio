<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    public function getArticle($post_title)
    {   
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where(array('post_title'=>$post_title, 'post_status'=>'published'));

        $results = $this->db->get();
        return $results;
    }
    
        
    public function getArticles(){

        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where(array('post_type'=>'article', 'post_status'=>'published'));
        $this->db->order_by('post_date', 'desc');

        $results = $this->db->get();

        return $results;        
    }
}