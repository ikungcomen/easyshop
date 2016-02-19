<?php 
	class DBhelper extends CI_Model {


		/*public function get_list_employee() {
	        $sql = "select * from tb_employee";
	        $result = $this->db->query($sql);
	        $result = $result->result_array();
	        return $result;
	    }*/
	    function login($username, $password){
          $sql = "select * from tb_user where user_username = '" . $username . "' and user_password = '" . $password. "'";
          $query = $this->db->query($sql);
          return $query;
       }

	    public function save_register($user_name, $user_lastname, $user_email, $user_phonenumber, $user_username, $user_password, $role, $status, $user, $current_date){

	    	$this->db->set('user_name',$user_name);
	        $this->db->set('user_lastname',$user_lastname);
	        $this->db->set('user_email',$user_email);
	        $this->db->set('user_phonenumber',$user_phonenumber);
	        $this->db->set('user_role',$role);
	        $this->db->set('user_status',$status);
	        $this->db->set('user_username',$user_username);
	        $this->db->set('user_password',$user_password);
			$this->db->set('create_date',$current_date);
	        $this->db->set('create_user',$user);
	        $this->db->set('update_date',$current_date);
	        $this->db->set('update_user',$user);
			$this->db->insert('tb_user');
	        if ($this->db->affected_rows() > 0) {
	            return 1;
	        } else {
	            return 0;
	        }
	    }





	}

?>