<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Report'
        );
        $this->load->view('panel/report', $data);
    }
}