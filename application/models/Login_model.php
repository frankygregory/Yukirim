<?php

class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function login_model(){

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
    }

}