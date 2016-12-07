<?php
class Post extends Admin_Controller {

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

	function allPosts()
	{

		$result = $this->Posts_Model->listPosts();
		$data= array('getListPosts'=> $result);
		//$this->load->view('dashboard/all_post', $data);

		$this->layout->title('Hello Admin');
		$this->layout->meta('Hara','Mart');
		$this->layout->view('dashboard/all_post',$data);

	}

	function addNewPosts()
	{
		$this->layout->title('Hello Admin');
		$this->layout->meta('Hara','Mart');
		$this->layout->view('dashboard/publish_post');

		$title = $this->input->post('txttitle');
		$desc = $this->input->post('txtdescription');
		$getDate = date("Y-m-d h:i:sa");
		$author = 'admin' ;
		//$getTime = date("h/i/sa");

		if (isset($_POST['btnPublish'])){
		$data = array(
			'post_title'=>$title,
			'post_description'=>$desc,
			'post_author'=> $author,
			'post_date'=>$getDate
			);
		
			if ($this->Posts_Model->addNewPost($data) ==TRUE){
				$this->load->view('dashboard/all_post');
				
			}else{
				echo "publish fail!";
			}
		}

	}

	function updatePosts($id='')
	{
		$data['condition'] = array('post_id'=>$id);
		$result = $this->Posts_Model->updatePost($data);
		$data = array('row'=>$result);

		$this->layout->title('Hello Admin');
		$this->layout->meta('Hara','Mart');
		$this->layout->view('dashboard/publish_post',$data);
	}

	function deletePosts($id='')
	{
		$data['condition'] = array('post_id'=>$id);
		$result = $this->Posts_Model->deletePost($data);

		$this->allPosts();
	}

}