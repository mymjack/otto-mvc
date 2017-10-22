<?php

class Footer extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    private function getOutputDat()
    {
        $data = array();
        $data['link_home'] = ROOTURL;
        $data['link_dashboard'] = ROOTURL.'dashboard/';
        $data['copyright'] = 'Copyright &copy; 2017 Otto Group. All Rights Reserved';
        return $data;
    }

    public function index()
    {
        
        $data = $this->getOutputDat();
        return $this->load->view('Footer', $data, true);
    }

    public function render()
    {
        $data = $this->getOutputDat();
        $this->load->view('Footer', $data);
    }
}