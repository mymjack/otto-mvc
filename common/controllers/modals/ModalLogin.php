<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModalLogin extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function index()
    {
        $this->lang->load('modals/ModalLogin', 'en-gb');
        $data = $this->lang->language;

        $data['url_register'] = ROOTURL . 'dashboard/register';

    	return $this->load->view('modals/ModalLogin', $data, true);
    }
}
?>