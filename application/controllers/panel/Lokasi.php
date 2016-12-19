<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends MY_Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Lokasi'
        );

        parent::template('panel/lokasi', $data);
    }
}