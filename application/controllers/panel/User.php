<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'User'
        );
        $this->load->view('panel/user', $data);
    }
}