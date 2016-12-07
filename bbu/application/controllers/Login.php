<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Model');
		$this->load->helper('form');
	}
	function index()
	{
		$this->load->view('login');
	}

	function check_login()
	{
		$email = $this->input->post('txtusername','true');
		$password = $this->input->post('txtpassword','true');

		$this->db->where('email', $email);
		$query = $this->db->get('ci_users');

		if($query->num_rows()>0){
			$row = $query->row_array();
            if($password == $row['u_password']){
            	$this->session->set_userdata('log_success',1);
                redirect('dashboard/Home');
                
        	}
        
        	
        }
        
        redirect('login');
	}
}