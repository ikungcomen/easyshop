<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->Model('Tb_slide');
        $this->load->Model('Tb_product');
        $this->load->Model('Tb_blandner');
        //$this->load->Model('DBhelper');
        //$this->load->database();
    }
	public function index(){
            $result['slide']    = $this->Tb_slide->load_slide();
            $result['product']  = $this->Tb_product->load_product();
            $result['blandner'] = $this->Tb_blandner->load_blandner();
            $this->load->view('frontend/include/header');
            $this->load->view('frontend/indexPage',$result);
            $this->load->view('frontend/include/footter');
		
	}
}
