<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model {
	
	function __construct()
        {
               parent::__construct();
        }

        public function getPosts($limit, $offset = 0)
        {
                $this->db->select('*, COUNT(parent_id) as comm_count');
                $this->db->from('posts');
                $this->db->join('comments', 'post_id = comments.parent_id', 'left');
                $this->db->where(array('post_type'=>'article', 'post_status'=>'published'));
                if($limit != 'all'){
                        $this->db->limit($limit, $offset);
                }
                $this->db->group_by('posts.post_id');
                $this->db->order_by('post_date', 'desc');
                $results = $this->db->get();

                return $results;
        }

        public function getPostByTitle($post_title)
        {   
                /*$this->db->select('*');
                $this->db->from('posts');
                $this->db->where(array('post_title'=>$post_title, 'post_status'=>'published'));

                $results = $this->db->get();
                return $results;*/

                $this->db->select('*');
                $this->db->from('posts');
                $this->db->join('meta','posts.post_id = meta.post_id');
                $this->db->where(array('post_title'=>$post_title, 'post_status'=>'published'));

                $results = $this->db->get();
                return $results;
        }

	public function getPostsByTag($tag, $limit, $offset = 0)
	{
                $this->db->select('*, COUNT(parent_id) as comm_count');
                $this->db->from('posts');
                $this->db->join('comments', 'post_id = comments.parent_id', 'left');
                $this->db->where(array('post_status'=>'published'));
                $this->db->like(array('post_terms'=>$tag));
                
                if($limit != 'all'){
                        $this->db->limit($limit, $offset);
                }

                $this->db->group_by('posts.post_id');
                $this->db->order_by('post_date', 'desc');
                $results = $this->db->get();
		return $results;
	}


	public function getPostsByCategory($category, $limit, $offset = 0)
        {
                $this->db->select('*, COUNT(parent_id) as comm_count');
                $this->db->from('posts');
                $this->db->join('comments', 'post_id = comments.parent_id', 'left');
                $this->db->where(array('post_type'=>'article', 'post_status'=>'published','post_category'=>$category));
                
                if($limit != 'all'){
                        $this->db->limit($limit, $offset);
                }

                $this->db->group_by('posts.post_id');
                $this->db->order_by('post_date', 'desc');

                $results = $this->db->get();
                return $results;        
        }

        public function getPostsByType($type, $limit, $offset = 0)
        {
                $this->db->select('*, COUNT(parent_id) as comm_count');
                $this->db->from('posts');
                $this->db->join('comments', 'post_id = comments.parent_id', 'left');
                $this->db->where(array('post_type'=>$type, 'post_status'=>'published'));
                $this->db->limit($limit, $offset);
                $this->db->group_by('posts.post_id');
                $this->db->order_by('post_date', 'desc');

                $results = $this->db->get();
		return $results;    	
        }

        public function getProjectPost($post_title){
                $this->db->select('*');
                $this->db->from('posts');
                $this->db->join('meta','posts.post_id = meta.post_id');
                $this->db->where(array('post_title'=>$post_title, 'post_status'=>'published','post_type'=>'project'));

                $results = $this->db->get();
                return $results;
        }

        public function getProjectPosts($limit, $offset = 0){
                $this->db->select('*');
                $this->db->from('posts');
                $this->db->join('meta','posts.post_id = meta.post_id');
                $this->db->where(array('post_status'=>'published','post_type'=>'project'));
                                
                if($limit != 'all'){
                        $this->db->limit($limit, $offset);
                }

                $this->db->group_by('posts.post_id');
                $this->db->order_by('post_date', 'desc');
                $results = $this->db->get();
                return $results;
        }

}