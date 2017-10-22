<?php

class ModalLogin extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function index()
    {
    	return $this->load->view('modals/ModalLogin', array(), true);
    }
}
?>