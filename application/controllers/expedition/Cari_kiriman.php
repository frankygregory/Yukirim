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

        parent::template('user/expedition/cari_kiriman', $data);
    }

    public function privat()
    {
        $data = array(
            'title' => 'Private'
        );

        parent::template('user/expedition/cari_kiriman_private', $data);
    }

    public function publik()
    {
        $data = array(
            'title' => 'Public'
        );

        parent::template('user/expedition/cari_kiriman_public', $data);
    }

    public function penawaran()
    {
        $data = array(
            'title' => 'Penawaran'
        );

        parent::template('user/expedition/cari_kiriman_penawaran', $data);

    }

    public function detail()
    {
        $data = array(
            'title' => 'Detail Kiriman'
        );

        parent::template('user/expedition/detail_kiriman', $data);

    }
}