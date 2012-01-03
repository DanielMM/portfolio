<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{	//Select all articles
		$data['page_title'] = "Blog";

		$data['projects'] = $this->_getArticles();
		$data['categories'] = $this->_getCategories();

		$data['months'] =array('01'=>'ian','02'=>'feb','03'=>'mar','04'=>'apr','05'=>'may','06'=>'iun','07'=>'iul','08'=>'aug','09'=>'sep','10'=>'oct','11'=>'nov','12'=>'dec');
		$this->load->view('header_view', $data);
		$this->load->view('list_view', $data);
		$this->load->view('footer_view');
	}

	public function article_by_title($title){
		
		$article = $this->_getArticle($title);
		$data['page_title'] = str_replace("_"," ",$article->post_title);

		$data['article'] = $article;
		$this->load->view('header_view', $data);
		$this->load->view('article_view', $data);
		$this->load->view('footer_view');

	}

	private function _getArticle($title)
	{	
		//check if there is an item with that title in the first place
		$this->load->model('Blog_model');
		
		$results = $this->Blog_model->getArticle($title);

		$article = $results->result();

		//var_dump($article[0]);
		//Check if there is an article with this title
		return $article[0];

	}

	private function _getArticles()
	{
		
		$this->load->model('Blog_model');
		
		$results = $this->Blog_model->getArticles();
		foreach($results->result() as $article_item){
			
			$articles[] = $article_item;
		}
		//var_dump($results->result());
		return $articles;

	}
	
	private function _getCategories()
	{
		
		$this->load->model('Category');
		$results = $this->Category->getCategories();
		foreach($results->result() as $cat_item){
			
			$categories[] = $cat_item;
		}
		//var_dump($categories);
		return $categories;
	}
}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */