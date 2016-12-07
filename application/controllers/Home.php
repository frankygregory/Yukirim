<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Home',
            'active' => array('active', '', '', ''),
        );

        $msg = '';
        $this->session->set_flashdata('msg', $msg);

        $this->load->view('front/home', $data);
    }

    public function contact()
    {
        $data = array(
            'title' => 'Contact',
            'active' => array('', '', 'active', ''),
        );
        $this->load->view('front/contact', $data);
    }

    public function register()
    {
        $data = array(
            'title' => 'Register',
            'active' => array('', '', '', 'active'),
        );
        $this->load->view('front/register', $data);
    }

    public function doRegisterConsumer()
    {
        if ($this->form_validation->run('registration_consumer') == FALSE) {
            $data = array(
                'title' => 'Register',
                'active' => array('', '', '', 'active'),
            );
            $this->load->view('front/register', $data);
        } else {
            $roleId = $this->input->post('role_id');
            $type_id = $this->getValue('type_id');
            $username = $this->getValue('username');
            $email = $this->getValue('email');
            $name = $this->getValue('name');
            $alamat = $this->getValue('useraddress');
            $tlp = $this->getValue('tlp');
            $hp = $this->getValue('hp');
            $password = $this->getValue('password');
            $term = $this->getValue('term-conditions');

            $data = array(
                'role_id' => $roleId,
                'type_id' => $type_id,
                'username' => $username,
                'user_email' => $email,
                'user_fullname' => $name,
                'user_address' => $alamat,
                'user_telephone' => $tlp,
                'user_handphone' => $hp,
                'password' => md5($password),
                'user_termsandconditions' => $term,
                'user_last_login_date' => date('d-m-y h:i:s'),
                'created_date' => date('d-m-y h:i:s'),
                'created_by' => $username,
                'modified_date' => date('d-m-y h:i:s'),
                'modified_by' => $username,
            );

            $this->db->insert('m_user', $data);

            $msg = '<div class="alert alert-success fade in block-inner">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<i class="icon-checkmark-circle"></i> Sukses! Data berhasil tersimpan.
							 </div>';

            $this->session->set_flashdata('msg', $msg);
            redirect(base_url() . "register");
        }
    }

    public function doRegisterExpedition()
    {
        if ($this->form_validation->run('registration_expedition') == FALSE) {
            $data = array(
                'title' => 'Register',
                'active' => array('', '', '', 'active'),
            );
            $this->load->view('front/register', $data);
        } else {
            $roleId = $this->input->post('role_id');
            $username = $this->getValue('username_expedition');
            $email = $this->getValue('email_expedition');
            $name = $this->getValue('name_expedition');
            $alamat = $this->getValue('address_expedition');
            $tlp = $this->getValue('tlp_expedition');
            $hp = $this->getValue('hp_expedition');
            $password = $this->getValue('password_expedition');
            $term = $this->getValue('term-conditions-expedition');

            $data = array(
                'role_id' => $roleId,
                'username' => $username,
                'user_email' => $email,
                'user_fullname' => $name,
                'user_address' => $alamat,
                'user_telephone' => $tlp,
                'user_handphone' => $hp,
                'password' => md5($password),
                'user_termsandconditions' => $term,
                'user_last_login_date' => date('d-m-y h:i:s'),
                'created_date' => date('d-m-y h:i:s'),
                'created_by' => $username,
                'modified_date' => date('d-m-y h:i:s'),
                'modified_by' => $username,
            );

            $this->db->insert('m_user', $data);

            $msg = '<div class="alert alert-success fade in block-inner">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<i class="icon-checkmark-circle"></i> Sukses! Data berhasil tersimpan.
							 </div>';

            $this->session->set_flashdata('msg', $msg);
            redirect(base_url() . "register");
        }
    }

    public function getValue($inputname)
    {
        return $this->input->post($inputname);
    }
}
