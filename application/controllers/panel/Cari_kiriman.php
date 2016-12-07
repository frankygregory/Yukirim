<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari_kiriman extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'All'
        );
        $this->load->view('panel/cari_kiriman', $data);
    }

    public function privat(){
        $data = array(
            'title' => 'Private'
        );
        $this->load->view('panel/cari_kiriman_private', $data);
    }

    public function publik(){
        $data = array(
            'title' => 'Public'
        );
        $this->load->view('panel/cari_kiriman_publik', $data);
    }

    public function penawaran(){
        $data = array(
            'title' => 'Penawaran'
        );
        $this->load->view('panel/cari_kiriman_penawaran', $data);
    }

    public function detail(){
        $data = array(
            'title' => 'Detail Kiriman'
        );
        $this->load->view('panel/detail_kiriman', $data);
    }
}
