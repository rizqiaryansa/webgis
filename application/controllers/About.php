<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller{
		function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('model_app');
        $this->load->library('form_validation');;
        $this->load->library('email');
        $this->load->library('pagination');
        $this->load->library('upload');
        $this->load->library('user_agent');
        $this->load->library('cart');

    }

function index() {
    $data['title'] = "WebGis - About";
    $data['active_about'] = "active";

    $this->load->view('element/v_header', $data);
    $this->load->view('pages/v_about', $data);
    $this->load->view('element/v_footer', $data);
  }

}