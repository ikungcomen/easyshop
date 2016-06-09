<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tb_slide
 *
 * @author anurartkae
 */
class Tb_slide extends CI_Model{
    public function load_slide(){
        $sql = "select * from tb_slide";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
}
