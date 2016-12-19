<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
    }

    public function cekLogin()
    {
        if ($this->session->userdata('isLoggedIn') != 1) {
            redirect('login');
        }
    }

    public function template($file, $data){
        $this->load->view('template/top', $data);
        $this->load->view($file, $data);
        $this->load->view('template/bottom');
    }
}
