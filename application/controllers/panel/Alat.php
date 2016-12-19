<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alat extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Alat'
        );
        parent::template('panel/alat', $data);
    }
}