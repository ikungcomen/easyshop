<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AccountController extends CI_Controller {

    public function index() {
        $this->load->view('frontend/account/account');
    }

}

?>