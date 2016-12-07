<?php
class Posts_Model extends CI_Model {

	function __construct()
	{
		parent:: __construct();

		
	}

	function addNewPost($data)
	{

		$this->db->insert('ci_posts',$data);
	}

	function listPosts()
	{
		return $this->db->get('ci_posts');
	}

	function updatePost($x)
	{
		$query = $this->db->get_where('ci_posts',$x['condition']);
		return $query->row();
	}

	function deletePost($x)
	{
		$this->db->delete('ci_posts',$x['condition']);
	}

}