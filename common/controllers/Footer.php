<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    private function getOutputDat()
    {
        $this->load->lang('Footer','en-gb');
        $data = $this->lang->language;
        $data['url_home'] = ROOTURL;
        $data['url_dashboard'] = ROOTURL.'dashboard/';
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