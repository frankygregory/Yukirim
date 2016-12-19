<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('User_model');
        $data = array(
            'title' => 'User',
            'userdata' => $this->User_model->select_user()
        );

        parent::template('panel/user', $data);
    }
}