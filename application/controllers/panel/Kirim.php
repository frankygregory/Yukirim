<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kirim extends MY_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'All'
        );

        parent::template('kirim', $data);
    }

    public function privates(){
        $data = array(
            'title' => 'Privates'
        );

        parent::template('kirim_private', $data);
    }

    public function publics(){
        $data = array(
            'title' => 'Public'
        );

        parent::template('kirim_public', $data);
    }

    public function penawaran(){
        $data = array(
            'title' => 'Penawaran'
        );

        parent::template('kirim_penawaran', $data);
    }

    public function detail(){
        $data = array(
            'title' => 'Detail Kiriman'
        );

        parent::template('detail_kirim', $data);
    }

    public function kirimbarang(){
        $data = array(
            'title' => 'Kirim Barang'
        );

        parent::template('kirimbarang_form', $data);
    }
}
