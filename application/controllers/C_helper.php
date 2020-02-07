<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Helper extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        echo "HELPER";
    }

    function url()
    {
        $this->load->view('helper/v_url');
    }

    function base_url()
    {
        $this->load->view('v_form');
    }
    function site_url()
    {
        $this->load->view('v_form');
    }

    function post()
    {
        print_r($_POST);
    }
}
