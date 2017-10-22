<?php

class Header extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    private function getOutputDat()
    {
        $data = array();
        // if($this->session->get['login_id']){
        //     $sql = "SELECT firstName FROM user_info WHERE u_id = '".$_SESSION['login_id']."'";
        //     $result = mysqli_query($db, $sql);
        //     $name = mysqli_fetch_assoc($result);
        //     $data['user_button'] = '
        //         <a class="btn btn-sm btn-bordered fs-12 btn-white" href="'.ROOTURL.'dashboard/">
        //             <i class="fa fa-user-circle-o" aria-hidden="true"></i> '. $name['firstName'] .'
        //         </a>';
        // } else {
            $data['user_button'] = '
                <a class="btn btn-sm btn-bordered fs-12 btn-white" data-toggle="modal" data-target="#myModal" data-text="Log In">
                    Log In
                </a>';
        // }
                return $data;
    }

    public function index()
    {
        $data = $this->getOutputDat();
        return $this->load->view('Header', $data, true);
    }

    public function render()
    {
        $data = $this->getOutputDat();
        $this->load->view('Header', $data);
    }
}