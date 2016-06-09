<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tb_order
 *
 * @author anurartkae
 */
class tb_order extends CI_Model {
    //put your code here
   
    public function get_order($user_key){
        $sql = "select * from tb_order where order_user_key = '".$user_key."'";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    public function get_orderList($user_key){
        $sql = "select * from tb_order where order_user_key = '".$user_key."' and order_status = 'O'";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    public function addOrder($address,$order_date,$user_key,$total_qty,$total_price,$current_date,$user_username){
        $this->db->set('order_date', $order_date);
        $this->db->set('order_user_key', $user_key);
        $this->db->set('order_address_key', $address);
        $this->db->set('order_status', 'O');
        $this->db->set('order_total_qty', $total_qty);
        $this->db->set('order_total_price', $total_price);
        $this->db->set('create_date', $current_date);
        $this->db->set('create_user', $user_username);
        $this->db->set('update_date', $current_date);
        $this->db->set('update_user', $user_username);
        $this->db->insert('tb_order');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function addOrder_detail($order_key,$product_code,$product_name,$qty,$price,$current_date,$user_username){
        $this->db->set('order_key', $order_key);
        $this->db->set('orderdetail_product_code', $product_code);
        $this->db->set('orderdetail_product_name', $product_name);
        $this->db->set('orderdetail_qty', $qty);
        $this->db->set('orderdetail_price', $price);
        $this->db->set('create_date', $current_date);
        $this->db->set('create_user', $user_username);
        $this->db->set('update_date', $current_date);
        $this->db->set('update_user', $user_username);
        $this->db->insert('tb_orderdetail');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function order_detail($order_key){
        $sql = "select hdr.order_key"
                . " ,hdr.order_date "
                . " ,dtl.orderdetail_product_code"
                . " ,dtl.orderdetail_product_name"
                . " ,dtl.orderdetail_qty"
                . " ,dtl.orderdetail_price"
                . " ,ad.adrress_prefix"
                . " ,ad.address_name"
                . " ,ad.address_lastname"
                . " ,ad.address_address"
                . " ,ad.address_subdistrict"
                . " ,ad.address_city"
                . " ,ad.address_state"
                . " ,ad.address_country"
                . " ,ad.address_zip"
                . " from tb_order hdr "
                . " inner join tb_orderdetail dtl on hdr.order_key = dtl.order_key"
                . " left join tb_address ad on ad.address_key = hdr.order_address_key "
                . " where hdr.order_key = '".$order_key."'";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    public function cancel_order($order_key){
        $this->db->where('order_key', $order_key);
        $this->db->delete('tb_order');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    public function cancel_order_detail($order_key){
        $this->db->where('order_key', $order_key);
        $this->db->delete('tb_orderdetail');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
