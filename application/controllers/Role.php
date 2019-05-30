<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

    function admin(){
        $this->load->view('main_admin');
    }

    function member(){
        $this->load->view('main_member');
    }
}