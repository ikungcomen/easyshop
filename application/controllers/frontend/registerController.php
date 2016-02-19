<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registerController extends CI_Controller {

	
	function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->Model('DBhelper');
        //$this->load->database();
    }
	public function index(){
		$this->load->view('frontend/register/register');
	}
	public function save_register(){
		$user_name        = $this->input->post('user_name');
		$user_lastname    = $this->input->post('user_lastname');
		$user_email       = $this->input->post('user_email');
		$user_phonenumber = $this->input->post('user_phonenumber');
		$user_username    = $this->input->post('user_username');
		$user_password    = $this->input->post('user_password');
		$role = "user";
		$status = "A";
		$user = "test";
		$current_date = date('Y-m-d');
		$result_inert = $this->DBhelper->save_register($user_name, $user_lastname, $user_email, $user_phonenumber, $user_username, $user_password, $role, $status, $user, $current_date);
		$this->load->view('frontend/register/register');
	}


	
}
?>
