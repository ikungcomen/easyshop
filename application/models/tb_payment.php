<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tb_payment
 *
 * @author anurartkae
 */
class tb_payment extends CI_Model{
    //put your code here
    
    public function get_list_payment(){
        $sql = "select payment.*,bank.* from tb_payment payment"
             . " left join tb_bank bank on bank.bank_key = payment.payment_bank ";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    public function get_list_bank(){
        $sql = "select * from tb_bank";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    
    public function get_count_payment($ordernumber){
        $sql = "select *  from tb_payment where payment_order_key = '".$ordernumber."'";
        $result = $this->db->query($sql);
        return $result->num_rows();
        
    }
    public function get_total_price($order_nuber){
        $sql = "select order_total_price from tb_order where order_key = '".$order_nuber."'";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }

    public function update_payment($ordernumber,$bank_number,$price,$payment_descr,$date,$user_username){
        
        $this->db->set('payment_price', $price);
        $this->db->set('payment_bank', $bank_number);
         $this->db->set('payment_descr', $payment_descr);
        $this->db->where('payment_order_key', $ordernumber);
        $this->db->set('update_date', $date);
        $this->db->set('update_user', $user_username);
        $this->db->update('tb_payment');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function insert_payment($ordernumber,$bank_number,$price,$payment_descr,$date,$user_username){
        $this->db->set('payment_order_key', $ordernumber);
        $this->db->set('payment_price', $price);
        $this->db->set('payment_bank', $bank_number);
        $this->db->set('payment_status', 'O');
        $this->db->set('payment_descr', $payment_descr);
        $this->db->set('create_date', $date);
        $this->db->set('create_user', $user_username);
        $this->db->set('update_date', $date);
        $this->db->set('update_user', $user_username);
        $this->db->insert('tb_payment');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    
    public function adjust_payment($payment_key,$date,$user_username){
        $this->db->set('payment_status', "P");
        $this->db->set('update_date', $date);
        $this->db->set('update_user', $user_username);
         $this->db->where('payment_key', $payment_key);
        $this->db->update('tb_payment');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
     public function unadjust_payment($payment_key,$date,$user_username){
        $this->db->set('payment_status', "O");
        $this->db->set('update_date', $date);
        $this->db->set('update_user', $user_username);
         $this->db->where('payment_key', $payment_key);
        $this->db->update('tb_payment');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
