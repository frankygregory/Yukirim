<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekanan extends MY_Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Rekanan'
        );

        parent::template('rekanan', $data);
    }
}