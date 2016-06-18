<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CheckpaymentController
 *
 * @author anurartkae
 */
class CheckpaymentController extends CI_Controller {
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->Model('DBhelper');
        $this->load->Model('tb_order');
        $this->load->Model('tb_address');
        $this->load->model('tb_payment');
    }
    public function index(){
        $result['payment'] = $this->tb_payment->get_list_payment();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/checkPayment/checkPayment',$result);
        $this->load->view('frontend/include/footter');
    }
    public function adjust($payment_key,$order_key){
        $result = 0;
        date_default_timezone_set('Asia/Bangkok');
        $user_username = $this->session->userdata('user_username');
        $date    = date('Y-m-d  H:m:s');
        $result = $this->tb_order->adjust_order($order_key,$date,$user_username);
        if ($result > 0){
             $result = $this->tb_payment->adjust_payment($payment_key,$date,$user_username);
        }
        redirect('frontend/CheckpaymentController');
        
        
    }
    public function unadjust($payment_key,$order_key){
        $result = 0;
        date_default_timezone_set('Asia/Bangkok');
        $user_username = $this->session->userdata('user_username');
        $date    = date('Y-m-d  H:m:s');
        $result = $this->tb_order->unadjust_order($order_key,$date,$user_username);
        if ($result > 0){
             $result = $this->tb_payment->unadjust_payment($payment_key,$date,$user_username);
        }
        redirect('frontend/CheckpaymentController');
    }
}
