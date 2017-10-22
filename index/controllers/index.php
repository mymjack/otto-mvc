<?php

class Index extends CI_Controller {


    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

    public function index()
    {

        // Load language
        $this->lang->load('Index', 'en-gb');
        $data = $this->lang->language;

        $this->document->set_title($this->lang->line('title'));

        // Load model
        // $this->load->model('Index');


        // Plugins
        $this->document->add_style('assets/pace/pace-theme-flash.css');
        $this->document->add_style('assets/tether/css/tether.min.css');
        $this->document->add_style('assets/bootstrap/css/bootstrap.min.css');
        $this->document->add_style('assets/font-awesome/css/font-awesome.css');
        $this->document->add_style('assets/swiper/css/swiper.css');

        // Styles
        $this->document->add_style('assets/css/pages.css');
        $this->document->add_style('assets/css/pages-icons.css');
        $this->document->add_style('assets/css/style.css');

        // Scripts
        $this->document->add_script('assets/jquery/jquery-1.11.1.min.js');

        // Footer Scripts (Loading scripts after body speeds up page load)
        $this->document->add_footer_script('assets/pace/pace.min.js');
        $this->document->add_footer_script('assets/js/pages.image.loader.js');
        $this->document->add_footer_script('assets/tether/js/tether.min.js');
        $this->document->add_footer_script('assets/bootstrap/js/bootstrap3.js');
        $this->document->add_footer_script('assets/swiper/js/swiper.jquery.min.js');
        // $this->document->add_footer_script('assets/velocity/velocity.min.js');
        // $this->document->add_footer_script('assets/velocity/velocity.ui.js');
        $this->document->add_footer_script('assets/jquery-appear/jquery.appear.js');
        $this->document->add_footer_script('assets/animateNumber/jquery.animateNumbers.js');

        $this->document->add_footer_script('assets/js/pages.frontend.js');
        $this->document->add_footer_script('assets/js/custom.js');


        $this->document->add_body_class('home');
        

        $data['head'] = $this->document->render_head(false);
        $data['head'] .= '
            <link rel="apple-touch-icon" href="pages/ico/60.png">
            <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
            <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
            <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-touch-fullscreen" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="default">
        ';

        $data['footer_scripts'] = $this->document->render_footer_scripts();

        $this->load->controller('Header');
        $this->load->controller('Footer');
        $this->load->controller('modals/ModalLogin');
        $data['header'] = $this->controller_header->index();
        $data['footer'] = $this->controller_footer->index();
        $data['modal_login'] = $this->controller_modallogin->index();
        $data['body_classes'] = $this->document->render_body_classes();

        // Start the output
        $this->load->view('Index', $data);
    }
}

?>
