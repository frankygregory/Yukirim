<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('isLoggedIn') == 1) {
            redirect($this->session->userdata('urlpage'));
        } else {
            $data = array(
                'title' => 'Login Yukirim',
                'error' => '',
            );
            $this->load->view('front/Login', $data);
        }
    }

    public function doLogin()
    {

        if ($this->form_validation->run('login') == FALSE) {
            $data = array(
                'title' => 'Login Yukirim',
                'error' => ''
            );
            $this->load->view('front/Login', $data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if (!preg_match('/^[a-zA-Z0-9_\.]+$/', $username) OR !preg_match('/^[a-zA-Z0-9_\.]+$/', $password)) {
                $this->view('front/Login', 'Isian harus huruf atau angka');
            } else {
                if ((strlen($username) > 0) OR (strlen($password) > 0)) {
                    if ($user = $this->db->query("select * from m_user where username = '" . $username . "' limit 1")->result_array()) {

                        if ($user[0]['password'] == md5($password)) {

                            if ($user[0]['user_level'] == 1) {

                                $this->setuserdata(
                                    $user[0]['user_id'],
                                    $user[0]['username'],
                                    $user[0]['user_fullname'],
                                    $user[0]['user_level'],
                                    $user[0]['role_id'],
                                    'panel/common/menu',
                                    'panel/home'
                                );

                                redirect('panel/home');
                            } elseif ($user[0]['user_level'] == 2) {
                                if ($user[0]['role_id'] == 1) {
                                    $this->setuserdata(
                                        $user[0]['user_id'],
                                        $user[0]['username'],
                                        $user[0]['user_fullname'],
                                        $user[0]['user_level'],
                                        $user[0]['role_id'],
                                        'user/consumer/common/menu',
                                        'expedition/home'
                                    );
                                    redirect('consumer/home');
                                } elseif ($user[0]['role_id'] == 2) {
                                    $this->setuserdata(
                                        $user[0]['user_id'],
                                        $user[0]['username'],
                                        $user[0]['user_fullname'],
                                        $user[0]['user_level'],
                                        $user[0]['role_id'],
                                        'user/expedition/common/menu',
                                        'expedition/home'
                                    );
                                    redirect('expedition/home');
                                }
                            }

                        } else {
                            $this->view('front/Login', "Password salah!!");
                        }
                    } else {
                        $this->view('front/Login', "Username salah!!");
                    }
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function view($file, $value)
    {
        $data = array(
            'title' => 'Login Yukirim',
            'error' => $value
        );
        $this->load->view($file, $data);
    }

    public function setuserdata($user_id, $username, $user_fullname, $user_level, $role_id, $menu, $urlpage)
    {
        $this->session->set_userdata(array(
                'user_id' => $user_id,
                'username' => $username,
                'user_fullname' => $user_fullname,
                'user_level' => $user_level,
                'role_id' => $role_id,
                'menu' => $menu,
                'urlpage' => $urlpage,
                'isLoggedIn' => true
            )
        );
    }

}