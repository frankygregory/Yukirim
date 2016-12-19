<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kiriman extends MY_Controller
{

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'KLiriman'
        );

        parent::template('user/expedition/kiriman', $data);
    }
}