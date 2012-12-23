<?php
    /**
     * 
     */
    class Master_Controller extends CI_Controller {
		
		public function index() {
			$this->load->view('master/header');
			$this->load->view('master/index');
			$this->load->view('master/footer');
		}
		
    }
    
?>