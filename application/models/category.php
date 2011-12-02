<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }

	public function getCategories()
	{
		$results = $this->db->get('categories');
		return $results;
	}

}