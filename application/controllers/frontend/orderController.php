<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of orderController
 *
 * @author anurartkae
 */
class orderController extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->Model('DBhelper');
        $this->load->Model('tb_order');
        $this->load->Model('tb_address');
    }
    public function index(){
        $user_key = $this->session->userdata('user_key');
        $result['order'] = $this->tb_order->get_order($user_key);
        $this->load->view('frontend/order/order',$result);
    }

    public function addOrder(){
        date_default_timezone_set('Asia/Bangkok');
        $address = $this->input->post('address');
        $order_date    = date('Y-m-d  H:m:s');
        $user_key      = $this->session->userdata('user_key');
        $user_username = $this->session->userdata('user_username');
        $current_date  = date('Y-m-d H:m:s');
        $product_code = "";
        $product_name = "";
        $qty   = 0;
        $price = 0;
        $total_qty = 0;
        $total_price = 0;
        $countOrder = 0;
       foreach ($this->cart->contents() as $items) {
            $total_qty+=$items['qty'];
        }        
        $total_price =  $this->cart->total();
        $result_insert =  $this->tb_order->addOrder($address,$order_date,$user_key,$total_qty,$total_price,$current_date,$user_username);
        if ($result_insert > 0) {
            $order_key = $this->db->insert_id();
            foreach ($this->cart->contents() as $items) {
                $product_code = $items['id'];
                $product_name = $items['name'];
                $qty          = $items['qty'];
                $price        = $items['subtotal'];
                $result_insert_detail =  $this->tb_order->addOrder_detail($order_key,$product_code,$product_name,$qty,$price,$current_date,$user_username);
            }
           if($result_insert_detail > 0){
                $this->cart->destroy();
                redirect('frontend/orderController','refresh');
                
           }
        }
    }
    public function confirm_order(){
        $user_key = $this->session->userdata('user_key');
        $result['address'] = $this->tb_address->get_address($user_key);
        $this->load->view('frontend/confirmOrder/comfirmOrder',$result);
    }

    public function order_detail($order_key){
        
        $result['order'] = $this->tb_order->order_detail($order_key);
        $this->load->view('frontend/order/orderDetail',$result);
        
    }
    public function cancel_order($order_key){
        $result = $this->tb_order->cancel_order($order_key);
        if($result > 0){
            $result = $this->tb_order->cancel_order_detail($order_key);
            if($result > 0){
                redirect('frontend/orderController','refresh');
            }
        }
        
        
    }
    
    
}
