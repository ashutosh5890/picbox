<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MX_Controller
{

    function __construct() {
    parent::__construct();
    }

    function index(){
        $data['module'] = "home";
        $data['view_file'] = "home_screen";
        $this->load->module('template');
        $this->template->public_view($data);
    }

}

?>