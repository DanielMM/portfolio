<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {


	public function category($category, $offset = 0){
		$data['page_title'] 	= "Category: ".$category;

		$data['meta_description'] = "All my ".$category."s on web development.";

		//Select all posts that belong to a category
				
		if($this->_getCategories()){
			$data['categories'] = $this->_getCategories();
		}

		//Load pagination library
		$this->load->library('pagination');

		//Set config settings for pagination
		$config['base_url'] = "http://portfolio/category/".$category."/page";
		$config['per_page'] = 2;
		$config['num_links'] = 4;
		$config['uri_segment'] = 4;

		$posts = $this->_getPostsByCategory($category, $config['per_page'], $offset);

		$config['total_rows'] = $posts['count'];

		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="next" title="Previous">';
		$config['prev_tag_close'] = '</li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="prev" title="Next">';
		$config['next_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		if($posts['data']){
			$data['posts'] = $posts['data'];
		}else{
			$this->load->view('error_404_view');
		}
		
		$this->load->view('header_view', $data);
		$this->load->view('list_view', $data);
		$this->load->view('footer_view');
	}

	public function tag($tag, $offset = 0){
		$tag_human = str_replace("_"," ",$tag);
		$data['page_title'] 	= "Tag: ".$tag_human;

		$data['meta_description'] = "A list of all the content tagged with ".$tag;

		//Select all posts that have the tag
				
		if($this->_getCategories()){
			$data['categories'] = $this->_getCategories();
		}
		
		//Load pagination library
		$this->load->library('pagination');
		
		//Set config settings for pagination
		$config['base_url'] = "http://portfolio/tag/".$tag."/page";
		$config['per_page'] = 5;
		$config['num_links'] = 4;
		$config['uri_segment'] = 4;

		$posts = $this->_getPostsByTag($tag, $config['per_page'], $offset);
		
		$config['total_rows'] = $posts['count'];

		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="next" title="Previous">';
		$config['prev_tag_close'] = '</li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="prev" title="Next">';
		$config['next_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';


		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		if($posts['data']){
			
			$data['posts'] = $posts['data'];
			
			$this->load->view('header_view', $data);
			$this->load->view('list_view', $data);
			$this->load->view('footer_view');

		}else{
			$this->load->view('error_404_view');
		}
		
	}

	public function addComment($post_link){
		var_dump($post_link);

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('url', 'url', 'trim');
		$this->form_validation->set_rules('message', 'message', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			
			//redirect('/article/'.$post_link, 'refresh');
		}
	}

	private function _getPostsByTag($tag, $limit, $offset)
	{
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPostsByTag($tag, $limit, $offset);
		foreach($results->result() as $post){
			
			$posts['data'][] = $post;
		}

		$count_results = $this->Post_model->getPostsByTag($tag, 'all', $offset);
		
		$posts['count'] = $count_results->num_rows();

		if(isset($posts['data'])){
			return $posts;
		}else {
			return false;
		}
	}

	private function _getPostsByCategory($category, $limit, $offset)
	{
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPostsByCategory($category, $limit, $offset);
		foreach($results->result() as $post){
			
			$posts['data'][] = $post;
		}

		$count_results = $this->Post_model->getPostsByCategory($category, 'all', $offset);
		
		$posts['count'] = $count_results->num_rows();

		if(isset($posts['data'])){
			return $posts;
		}else {
			return false;
		}
	}

	private function _getCategories()
	{
		
		$this->load->model('Category_model');
		$results = $this->Category_model->getCategories();
		foreach($results->result() as $cat_item){
			
			$categories[] = $cat_item;
		}
		if(isset($categories)){
			return $categories;
		}else{
			return false;
		}
	}
}

/* End of file post.php */
/* Location: ./application/controllers/post.php */