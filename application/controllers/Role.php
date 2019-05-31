<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

    function admin(){
        redirect('admin');
    }

    function member(){
        redirect('member');
    }
}
