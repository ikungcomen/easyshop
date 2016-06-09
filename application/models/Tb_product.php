<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tb_product
 *
 * @author anurartkae
 */
class Tb_product extends CI_Model{
    
    public function load_product(){
        $sql = "select * from tb_product";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    
}
