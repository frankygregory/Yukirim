<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kiriman extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'KLiriman'
        );
        $this->load->view('panel/Kiriman', $data);
    }
}