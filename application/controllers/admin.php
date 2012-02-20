<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['page_title'] = "Dashboard ";
		$data['nav_item'] = "article";

		$drafts = $this->_getArticlePostsByStatus('draft', 'all', 0);

		if($drafts['data']){
			
			$data['drafts'] = $drafts['data'];
			$data['drafts_count'] = $drafts['count'];
		}
		
		$unpublished	= $this->_getArticlePostsByStatus('unpublished', 'all', 0);
		if($unpublished['data']){
			
			$data['unpublished'] = $unpublished['data'];
			$data['unpublished_count'] = $unpublished['count'];
		}

		$published	= $this->_getArticlePostsByStatus('published', 'all', 0);
		if($published['data']){
			
			$data['published'] = $published['data'];
			$data['published_count'] = $published['count'];
		}

		$featured	= $this->_getArticlePostsByStatus('featured', 'all', 0);
		if($featured['data']){
			
			$data['featured'] = $featured['data'];
			$data['featured_count'] = $featured['count'];
		}

			$this->load->view('admin/header_view', $data);
			$this->load->view('admin/dashboard_view', $data);
			$this->load->view('admin/footer_view');

	}

	public function projects()
	{
		$data['page_title'] = "Projects ";
		$data['nav_item'] = "project";

		$drafts = $this->_getProjectPostsByStatus('draft', 'all', 0);

		if($drafts['data']){
			
			$data['drafts'] = $drafts['data'];
			$data['drafts_count'] = $drafts['count'];
		}
		
		$unpublished	= $this->_getProjectPostsByStatus('unpublished', 'all', 0);
		if($unpublished['data']){
			
			$data['unpublished'] = $unpublished['data'];
			$data['unpublished_count'] = $unpublished['count'];
		}

		$published	= $this->_getProjectPostsByStatus('published', 'all', 0);
		if($published['data']){
			
			$data['published'] = $published['data'];
			$data['published_count'] = $published['count'];
		}

		$featured	= $this->_getProjectPostsByStatus('featured', 'all', 0);
		if($featured['data']){
			
			$data['featured_count'] = $featured['count'];
		}

			$this->load->view('admin/header_view', $data);
			$this->load->view('admin/dashboard_view', $data);
			$this->load->view('admin/footer_view');
	}

	public function comments()
	{
		$data['page_title'] = "Comments ";
		$data['nav_item'] = "comment";
		//$posts = $this->_getProjectPostsByStatus('published', 10, 0);

		if($posts['data']){
			
			$data['posts'] = $posts['data'];
		}
			$this->load->view('admin/header_view', $data);
			$this->load->view('admin/dashboard_view', $data);
			$this->load->view('admin/footer_view');
	}

	public function media()
	{
		$data['page_title'] = "Media ";
		$data['nav_item'] = "media";
		//$posts = $this->_getProjectPostsByStatus('published', 10, 0);

		if($posts['data']){
			
			$data['posts'] = $posts['data'];
		}
			$this->load->view('admin/header_view', $data);
			$this->load->view('admin/dashboard_view', $data);
			$this->load->view('admin/footer_view');
	}

	public function edit($title = false)
	{
		$data['page_title'] = "Edit ";

		if($title){
			$data['post'] = $this->_getArticle($title);
			$data['nav_item'] = $data['post']->post_type;
		}else{
			$data['nav_item'] = 'article';
			
		}

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

		$this->form_validation->set_rules('title', 'title', 'trim|required');
		$this->form_validation->set_rules('creation_date', 'creation_date', 'trim|required');
		$this->form_validation->set_rules('update_date', 'update_date', 'trim|required');
		$this->form_validation->set_rules('post_teaser', 'post_teaser', 'trim|required');
		$this->form_validation->set_rules('post_content', 'post_content', 'trim|required');
		$this->form_validation->set_rules('category', 'category', 'trim|required');
		$this->form_validation->set_rules('type', 'type', 'trim|required');
		$this->form_validation->set_rules('terms', 'terms', 'trim|required');
		$this->form_validation->set_rules('settings', 'settings', 'trim|required');
		$this->form_validation->set_rules('thumb', 'thumb', 'trim');
		$this->form_validation->set_rules('status', 'status', 'trim|required');
		
		$this->form_validation->set_rules('meta', 'meta', 'trim|required');


		if ($this->form_validation->run() == FALSE)
		{
			$data['page_title'] 	= "Edit ";
			$this->load->view('admin/header_view', $data);
			$this->load->view('admin/edit_view');
			$this->load->view('admin/footer_view');
			//var_dump($this->input->post());
		}
		else
		{

			$post['data']['post_id']		= $this->input->post('post_id', TRUE);
			$post['data']['post_title']  	= $this->input->post('title', TRUE);
			$post['data']['post_title']  	= url_title($post['data']['post_title'],'undersoce');
			$post['data']['post_content'] 	= $this->input->post('post_content', TRUE);
			$post['data']['post_teaser'] 	= $this->input->post('post_teaser', TRUE);
			$post['data']['post_date'] 		= $this->input->post('creation_date', TRUE);
			$post['data']['post_modified'] 	= $this->input->post('update_date', TRUE);
			$post['data']['post_thumb']  	= $this->input->post('thumb', TRUE);
			$post['data']['post_category'] 	= $this->input->post('category', TRUE);
			$post['data']['post_type'] 		= $this->input->post('type', TRUE);
			$post['data']['post_terms']  	= $this->input->post('terms', TRUE);
			$post['data']['post_status'] 	= $this->input->post('status', TRUE);
			$post['data']['post_settings'] 	= $this->input->post('settings', TRUE);
			
			$post['meta']['meta_content']	= $this->input->post('meta', TRUE);

			if($this->input->post('submit', TRUE) == 'Save'){
			
				$result = $this->_setPost($post);
				
			}/*elseif($this->input->post('submit', TRUE) == 'Update') {

				$result = $this->_updatePost($post);

			}*/

			if($result){
				$data['feedback'] = $result;
				$data['check'] = $post['data']['post_type'].'/'.url_title($post['data']['post_title'], 'underscore');
				$this->load->view('admin/header_view');
				$this->load->view('admin/edit_view', $data);
				$this->load->view('admin/footer_view');
			}

		}
	}

	private function _getArticlePostsByStatus($status, $limit, $offset)
	{
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getArticlePostsByStatus($status, $limit, $offset);
		foreach($results->result() as $post){
			
			$posts['data'][] = $post;
		}

		$count_results = $this->Post_model->getArticlePostsByStatus($status, 'all', $offset);
		
		$posts['count'] = $count_results->num_rows();

		if(isset($posts['data'])){
			return $posts;
		}else {
			return false;
		}
	}

	private function _getProjectPostsByStatus($status, $limit, $offset)
	{
		
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getProjectPostsByStatus($status, $limit, $offset);
		foreach($results->result() as $post){
			
			$posts['data'][] = $post;
		}

		$count_results = $this->Post_model->getProjectPostsByStatus($status, 'all', $offset);
		
		$posts['count'] = $count_results->num_rows();

		if(isset($posts['data'])){
			return $posts;
		}else {
			return false;
		}
	}

	private function _getArticle($title)
	{	
		//check if there is an item with that title in the first place
		$this->load->model('Post_model');
		
		$results = $this->Post_model->getPostByTitle($title);

		$article = $results->result();

		//Check if there is an article with this title
		if(array_key_exists(0, $article)){
			return $article[0];
		}else{
			return false;
		}
	}

	private function _setPost($post){

		$this->load->model('Post_model');
		$result = $this->Post_model->setPost($post);

		return $result;
	}

	/*private function _updatePost($post){

		$this->load->model('Post_model');
		$result = $this->Post_model->updatePost($post);
		//var_dump($post);
		return $result;
	}*/
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */