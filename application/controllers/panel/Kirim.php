<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kirim extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'All'
        );
        $this->load->view('panel/kirim', $data);
    }

    public function privates(){
        $data = array(
            'title' => 'Private'
        );
        $this->load->view('panel/kirim_private', $data);
    }

    public function publics(){
        $data = array(
            'title' => 'Public'
        );
        $this->load->view('panel/kirim_public', $data);
    }

    public function penawaran(){
        $data = array(
            'title' => 'Penawaran'
        );
        $this->load->view('panel/kirim_penawaran', $data);
    }

    public function detail(){
        $data = array(
            'title' => 'Detail Kiriman'
        );
        $this->load->view('panel/detail_kirim', $data);
    }

    public function kirimbarang(){
        $data = array(
            'title' => 'Kirim Barang'
        );
        $this->load->view('panel/Kirimbarang_form', $data);
    }
}
