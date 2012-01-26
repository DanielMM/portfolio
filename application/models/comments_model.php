<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
        public function insertComment($data)
        {

                $this->db->insert('comments', $data);
        }

	public function getComments($article_id)
	{
        	$this->db->select('*');
                $this->db->from('comments');
                $this->db->where(array('parent_id'=>$article_id));
                $this->db->order_by('comm_date', 'desc');
                $results = $this->db->get();
		return $results;
	}

        /*public function getPostsByCategory($category)
        {
                $this->db->select('*','categories.cat_title','categories.cat_name');
                $this->db->from('posts');
                $this->db->join('categories', 'posts.post_category = categories.cat_name');
                $this->db->where(array('post_status'=>'published','post_category'=>$category));
                $this->db->order_by('posts.post_date', 'desc');

                $results = $this->db->get();
                return $results;
        }*/

}