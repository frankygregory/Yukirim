<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
NOTE
Just put general function which frequently used in this class
**/

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('M_GenFunc','',TRUE);
    }

    public function cekLogin()
    {
        if ($this->session->userdata('isLoggedIn') != 1) {
            redirect('login');
        }
    }

    public function template($file, $data){
        $this->load->view('template/top', $data);
        $this->load->view($file, $data);
        $this->load->view('template/bottom');
    }

    public function queryData($select) {
        return $this->M_GenFunc->querydata($select);
    }

    public function queryArray($select) {
        return $this->M_GenFunc->querydata($select)->result_array();
    }

    public function selectData($where) {
        return $this->M_GenFunc->selectdata($where);
    }

    public function selectArray($where) {
        return $this->M_GenFunc->selectdata($where)->result_array();
    }

    public function insertData($tabel, $data){
        return $this->M_GenFunc->insertdata($tabel,$data);
    }

    public function deleteData($tabel, $data){
        return $this->M_GenFunc->deletedata($tabel,$data);
    }

    public function updateData($tabel, $data, $where){
        return $this->M_GenFunc->updatedata($tabel,$data,$where);
    }

}