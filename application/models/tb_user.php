<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tb_user
 *
 * @author anurartkae
 */
class tb_user extends CI_Model{
    public function loadUser($user_name,$user_lastname){
        $sql = "select * from tb_user where user_name = '".$user_name."' and user_lastname = '".$user_lastname."'";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result;
    }
    public function updateMember($user_name,$user_lastname,$user_email,$user_phonenumber,$user_username,$old_password,$new_password,$updateByUser,$updateDate){
        
        
        $this->db->set('user_name', $user_name);
        $this->db->set('user_lastname', $user_lastname);
        $this->db->set('user_email', $user_email);
        $this->db->set('user_phonenumber', $user_phonenumber);
        if($new_password != ""){
            $this->db->set('user_password', $new_password);
        }
        $this->db->set('update_date', $updateDate);
        $this->db->set('update_user', $updateByUser);
        $this->db->where('user_username', $user_username);
        $this->db->where('user_password', $old_password);
        $this->db->update('tb_user');
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
