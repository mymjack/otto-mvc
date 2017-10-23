<?php
  // include("../utils.php");
  // configSession();

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function index()
    {
        // Load language
        $this->load->lang('Index', 'en-gb');
        $this->document->set_title($this->lang->line('title'));
        $data = $this->lang->language;

    // <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    // <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    // <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    // <link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
    // <link href="assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
    // <link href="assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
    // <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    // <link href="assets/plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" media="screen" />


    // <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    // <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    // <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    // <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    // <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    // <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    // <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    // <script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
    // <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
    // <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    // <script src="assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
    // <script src="assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
    // <script src="assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
    // <script src="assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
    // <script src="assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
    // <script src="assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
    // <script src="assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
    // <script src="assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
    // <script src="assets/plugins/mapplic/js/hammer.js"></script>
    // <script src="assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
    // <script src="assets/plugins/mapplic/js/mapplic.js"></script>
    // <script src="assets/plugins/rickshaw/rickshaw.min.js"></script>
    // <script src="assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>
    // <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    // <script src="assets/plugins/skycons/skycons.js" type="text/javascript"></script>
    // <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
        // Load model
        // $this->load->model('Index');


        // Plugins
        $this->document->add_style('assets/pace/pace-theme-flash.css');
        $this->document->add_style('assets/tether/css/tether.min.css');
        $this->document->add_style('assets/bootstrap/css/bootstrap3.min.css');
        $this->document->add_style('assets/font-awesome/css/font-awesome.css');
        // $this->document->add_style('assets/swiper/css/swiper.css');

        // Styles
        $this->document->add_style('assets/css/pages.css');
        $this->document->add_style('assets/css/pages-icons.css');
        $this->document->add_style('assets/css/style.css');
        $this->document->add_style('assets/css/custom.css');

        // Scripts
        $this->document->add_script('assets/jquery/jquery-1.11.1.min.js');

        // Footer Scripts (Loading scripts after body speeds up page load)
        $this->document->add_footer_script('assets/pace/pace.min.js');
        $this->document->add_footer_script('assets/js/pages.image.loader.js');
        $this->document->add_footer_script('assets/tether/js/tether.min.js');
        $this->document->add_footer_script('assets/bootstrap/js/bootstrap3.js');
        // $this->document->add_footer_script('assets/swiper/js/swiper.jquery.min.js');
        // $this->document->add_footer_script('assets/velocity/velocity.min.js');
        // $this->document->add_footer_script('assets/velocity/velocity.ui.js');
        // $this->document->add_footer_script('assets/jquery-appear/jquery.appear.js');
        // $this->document->add_footer_script('assets/animateNumber/jquery.animateNumbers.js');

        // $this->document->add_footer_script('assets/js/pages.frontend.js');
        $this->document->add_footer_script('assets/js/custom.js');
        $this->document->add_footer_script('assets/js/dashboard.js');
        $this->document->add_footer_script('assets/js/scripts.js');


        $this->document->add_body_class('dashboard');

        $data['body_classes'] = $this->document->render_body_classes();
        

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
            <style type="text/css">
              .widget-flights:after { background-image: url('.IMAGEURL.'pages_hero.jpg); }
              .widget-shipments:after { background-image: url('.IMAGEURL.'person-cropped.jpg); }
              .widget-orders:after { background-image: url('.IMAGEURL.'order-cropped.jpg); }
              .card-icon-refresh-lg-white { background-image: url('.IMAGECOMMONURL.'progress/progress-circle-lg-white-static.svg); }
              .widget:before { background-image: url('.IMAGEURL.'linear_gradient.png); }
            </style>
        ';

        $data['footer_scripts'] = $this->document->render_footer_scripts();

        $data['url_flights'] = APPURL . 'flights';
        $data['url_shipments'] = APPURL . 'shipments';
        $data['url_orders'] = APPURL . 'orders';

        // $this->load->controller('Header');
        // $this->load->controller('Footer');
        // $this->load->controller('Sidebar');
        // $data['header'] = $this->controller_header->index();
        // $data['footer'] = $this->controller_footer->index();
        // $data['sidebar'] = $this->controller_sidebar->index();
        $data['header'] = '';
        $data['footer'] = '';
        $data['sidebar'] = '';
        $data['body_classes'] = $this->document->render_body_classes();

        // Start the output
        $this->load->view('Index', $data);
    }
}


