<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Template extends MX_Controller
{

    function __construct() {
    parent::__construct();
    }

    function public_view($data){
        $data['assets'] = base_url().'assets/';
        $this->load->view('public_view', $data);
    }
    
    function admin_view($data){
        Modules::run('secure_site/check_is_admin'); 
        $data['assets'] = base_url().'assets/';
        $this->load->view('admin_view', $data);
    }
            
    
    

}

?>