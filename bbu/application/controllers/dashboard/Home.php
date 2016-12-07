<?php
class Home extends Admin_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Posts_Model');

	}

	function index()
	{
		
		$this->layout->title('Hello Admin');
		$this->layout->meta('Hara','Mart');
		$this->layout->view('dashboard/index');
	
	}

}