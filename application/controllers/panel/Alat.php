<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alat extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Alat'
        );
        $this->load->view('panel/alat', $data);
    }
}