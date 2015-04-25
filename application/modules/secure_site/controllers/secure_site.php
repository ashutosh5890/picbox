<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Secure_site extends MX_Controller
{

    function __construct() {
    parent::__construct();
    }

    function check_is_admin(){
        //make sure user has logged in as admin
        return TRUE;
    }
}

?>