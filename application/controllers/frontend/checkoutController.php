<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class checkoutController extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->Model('DBhelper');
        $this->load->Model('Tb_slide');
        $this->load->Model('Tb_product');
        $this->load->Model('Tb_blandner');
        $this->load->Model('tb_order');
        
    }
    public function index() {
        $user_key = $this->session->userdata('user_key');
        $result['order'] = $this->tb_order->get_orderList($user_key);
        $this->load->view('frontend/checkout',$result);
    }

    public function checkLogin() {
        $user_name = $this->input->post("user_username");
        $user_password = $this->input->post("user_password");
        $usr_result = $this->DBhelper->login($user_name, $user_password);
        $user_role = "";

        foreach ($usr_result->result() as $row) {
            $user_name = $row->user_name;
            $user_lastname = $row->user_lastname;
            $user_role = $row->user_role;
            $user_username = $row->user_username;
        }
       
        if ($usr_result->num_rows() > 0) {
            $sessiondata = array(
                'user_name' => $user_name,
                'user_lastname' => $user_lastname,
                'user_role' => $user_role,
                'user_username' => $user_username,
                'logincomplete' => TRUE
            );
            $this->session->set_userdata($sessiondata);
            redirect('frontend/checkoutController');
        } else {
            redirect('frontend/checkoutController');
        }
    }
    

}
