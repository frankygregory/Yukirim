<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari_kiriman extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'All'
        );
        parent::template('cari_kiriman', $data);
    }

    public function privates()
    {
        $data = array(
            'title' => 'Private'
        );
        parent::template('cari_kiriman_private', $data);
    }

    public function publics()
    {
        $data = array(
            'title' => 'Public'
        );
        parent::template('cari_kiriman_public', $data);
    }

    public function penawaran()
    {
        $data = array(
            'title' => 'Penawaran'
        );
        parent::template('cari_kiriman_penawaran', $data);
    }

    public function detail()
    {
        $data = array(
            'title' => 'Detail Kiriman'
        );
        parent::template('detail_kiriman', $data);
    }
}
