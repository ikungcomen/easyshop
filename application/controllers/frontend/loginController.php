<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->Model('DBhelper');
         //$this->load->library('form_validation');
    }
    public function index(){
    	$this->load->view('frontend/login/login');
    }
    public function checkLogin(){
		$user_name = $this->input->post("user_username");
        $user_password = $this->input->post("user_password");
        $usr_result = $this->DBhelper->login($user_name, $user_password);
        $user_role = "";
                    
        foreach ($usr_result->result() as $row){
            $user_name     =  $row->user_name;
            $user_lastname =  $row->user_lastname;
            $user_role          =  $row->user_role;
            $user_username =  $row->user_username;
		}

        if ($usr_result->num_rows() > 0) {//active user record is present
            //set the session variables
            $sessiondata = array(
                'user_name'     => $user_name,
				'user_lastname' => $user_lastname,
                'user_role'     => $user_role,
                'user_username' => $user_username,
                'logincomplete'     => TRUE
            );
            $this->session->set_userdata($sessiondata);
            $this->load->view('frontend/indexPage');
        }else{
            $this->load->view('frontend/login/login');
        }
	}
	public function logout(){
		
		//$this->session->unset_userdata('logincomplete');
	    $this->session->sess_destroy();
		redirect('indexController','refresh');
         
	}
}
?>