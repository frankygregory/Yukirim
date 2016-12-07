<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Kendaraan'
        );
        $this->load->view('panel/kendaraan', $data);
    }
}