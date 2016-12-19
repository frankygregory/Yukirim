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

        parent::template('user/consumer/kirim', $data);
    }

    public function privates(){
        $data = array(
            'title' => 'Private'
        );
        parent::template('user/consumer/kirim_private', $data);
    }

    public function publics(){
        $data = array(
            'title' => 'Public'
        );

        parent::template('user/consumer/kirim_public', $data);
    }

    public function penawaran(){
        $data = array(
            'title' => 'Penawaran'
        );

        parent::template('user/consumer/kirim_penawaran', $data);
    }

    public function detail(){
        $data = array(
            'title' => 'Detail Kiriman'
        );

        parent::template('user/consumer/detail_kirim', $data);
    }

    public function kirimbarang(){
        $data = array(
            'title' => 'Kirim Barang'
        );

        parent::template('user/consumer/Kirimbarang_form', $data);
    }

}
