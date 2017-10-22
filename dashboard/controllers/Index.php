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
        $data = array();

        // Load language
        $this->load->lang('Index', 'en-gb');
        $data['text_body']    = $this->lang->line('text_body');

        // Or do this if u need all texts in the language file
        // $data = array_merge($data, $this->lang->language);

        // Load model
        $this->load->model('Index');
        $this->model_index->foo();

        // Set title and body classes
        $this->document->set_title($this->lang->line('title'));
        $data['body_classes'] = 'hello-world';

        // Add style and script to document. Files should be found under ./view/, or APPCOMMON/view/
        // $this->document->add_style('assets/css/style.css');
        // $this->document->add_script('assets/jquery/jquery-1.11.1.min.js');

        // get document head
        $data['head'] = $this->document->render_head(false);

        // Start the output
        $this->load->view('Index', $data);
    }
}

?>