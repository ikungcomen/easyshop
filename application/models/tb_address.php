<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tb_address
 *
 * @author anurartkae
 */
class tb_address extends CI_Model{
    public function get_address($user_key){
        $sql = "select * from tb_address where address_user_key = '".$user_key."'";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
}
