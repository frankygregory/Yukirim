<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kiriman extends MY_Controller
{

    public function __construct(){
        parent::__construct();
        //$this->load->library('typography');
    }

    public function index()
    {
        $data = array(
            'title' => 'Kiriman',
            'pending_data' => $this->selectArray('m_shipment'),
            'pesanan_data' => $this->selectArray('m_shipment'),
            'dikirim_data' => $this->selectArray('m_shipment'),
            'diambil_data' => $this->selectArray('m_shipment'),
            'diterima_data' => $this->selectArray('m_shipment'),
            'selesai_data' => $this->selectArray('m_shipment'),
        );

        //$this->load->library('genfunc');
        //echo $this->genfunc->test();

        parent::template('panel/kiriman', $data);
    }
}