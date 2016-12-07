<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekanan extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Rekanan'
        );
        $this->load->view('panel/rekanan', $data);
    }
}