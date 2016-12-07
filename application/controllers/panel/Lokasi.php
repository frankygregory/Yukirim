<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('panel/lokasi');
    }
}