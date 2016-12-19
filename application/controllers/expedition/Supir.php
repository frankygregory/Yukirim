<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supir extends MY_Controller
{

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Driver'
        );

        parent::template('user/expedition/supir', $data);
    }
}