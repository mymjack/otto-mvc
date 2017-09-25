
<?php

class Footer extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function render()
    {
        $data = array();
        $data['link_home'] = BASEURL;
        $data['link_dashboard'] = BASEURL.'dashboard/';
        $data['copyright'] = 'Copyright &copy; 2017 Otto Group. All Rights Reserved';

        $this->load->view('Footer', $data);
    }
}


