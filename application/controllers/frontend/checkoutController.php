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
        $this->load->Model('tb_payment');
        
    }
    public function index() {
        $user_key        = $this->session->userdata('user_key');
        $result['order'] = $this->tb_order->get_orderList($user_key);
        $result['bank']  = $this->tb_payment->get_list_bank();
        $this->load->view('frontend/checkout',$result);
    }
    public function comfirm_payment(){
        date_default_timezone_set('Asia/Bangkok');
        $ordernumber   = $this->input->post('order_number');
        $bank_number   = $this->input->post('bank_number');
        $price         = $this->input->post('price');
        $payment_descr = $this->input->post('$payment_descr');
        $user_username = $this->session->userdata('user_username');
        $date          = date('Y-m-d  H:m:s');
        $count         = $this->tb_payment->get_count_payment($ordernumber);
        $result        = 0;
        if($count > 0){
            $result = $this->tb_payment->update_payment($ordernumber,$bank_number,$price,$payment_descr,$date,$user_username);
        }else{
            $result = $this->tb_payment->insert_payment($ordernumber,$bank_number,$price,$payment_descr,$date,$user_username);
            if ($result > 0){
                $result = $this->tb_order->update_status_order($ordernumber,$date,$user_username);
            }
            
        }
        
        redirect('frontend/checkoutController');
        //if($result > 0){
        //        echo 'AA';
         //   }else{
           //     echo 'XX';
          //  }
        
        
        
    }
    public function get_total_price(){
        $order_nuber = $this->input->post('order_nuber');
        $result = $this->tb_payment->get_total_price($order_nuber);
        echo $result[0]['order_total_price'];
    }

    



    public function checkLogin() {
        $user_name     = $this->input->post("user_username");
        $user_password = $this->input->post("user_password");
        $usr_result    = $this->DBhelper->login($user_name, $user_password);
        $user_role     = "";
        $user_key      = "";
        $user_prefix   = "";

        foreach ($usr_result->result() as $row) {
            $user_name     = $row->user_name;
            $user_lastname = $row->user_lastname;
            $user_role     = $row->user_role;
            $user_username = $row->user_username;
            $user_key      = $row->user_key;
            $user_role     = $row->user_role;
        }
       
        if ($usr_result->num_rows() > 0) {
            $sessiondata = array(
                'user_prefix'   => $user_prefix,
                'user_name'     => $user_name,
                'user_lastname' => $user_lastname,
                'user_role'     => $user_role,
                'user_key'      => $user_key,
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
