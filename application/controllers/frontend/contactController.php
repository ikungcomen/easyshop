<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contactController extends CI_Controller {

	
	function __construct() {
        parent::__construct();
        $this->load->library('cart');
        //$this->load->Model('DBhelper');
        //$this->load->database();
    }
	public function index()
	{
		$this->load->view('frontend/contact');
	}

	
}
?>
