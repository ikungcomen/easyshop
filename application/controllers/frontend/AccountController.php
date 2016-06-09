<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AccountController extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->Model('tb_user');
        $this->load->Model('DBhelper');
        //$this->load->database();
    }
    
    public function index() {
        $user_name      = $this->session->userdata("user_name");
        $user_lastname  = $this->session->userdata("user_lastname");
        $result['user'] = $this->tb_user->loadUser($user_name,$user_lastname);
        $this->load->view('frontend/account/account',$result);
    }
    public function editMenber($user_username,$old_password){
        $updateByUser     = $this->session->userdata("user_name");
        $user_name        = $this->input->post('user_name');
        $user_lastname    = $this->input->post('user_lastname');
        $user_email       = $this->input->post('user_email');
        $user_phonenumber = $this->input->post('user_phonenumber');
        $new_password     = $this->input->post('new_password');
        $updateDate       = date('Y-m-d');
        $result           = $this->tb_user->updateMember($user_name,$user_lastname,$user_email,$user_phonenumber,$user_username,$old_password,$new_password,$updateByUser,$updateDate);
        if ($result > 0) {
            $usr_result = $this->DBhelper->login($user_name, $new_password);
            $user_role = "";

            foreach ($usr_result->result() as $row) {
                $user_name     = $row->user_name;
                $user_lastname = $row->user_lastname;
                $user_role     = $row->user_role;
                $user_username = $row->user_username;
            }
            $sessiondata = array(
                'user_name'     => $user_name,
                'user_lastname' => $user_lastname,
                'user_role'     => $user_role,
                'user_username' => $user_username,
                'logincomplete' => TRUE
            );
            $this->session->set_userdata($sessiondata);
        }
        redirect('frontend/AccountController');
    }
    public function addreddShip(){
        $this->load->view('frontend/addressShip/addressShip');
    }
    

}

?>