<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('User');

        $this->load->library('session');
    }


    public function index()
    {
        $data['judul'] = "Tately NV.";
        $this->load->view('templates/head', $data);
        $this->load->view('home_page/index');
        $this->load->view('templates/footer');
    }


    public function login()
    {

        $role = $this->input->post('login');
        if ($role == "Superintendent") {
            redirect('home/loginSuperint');
        } elseif ($role == "Supervisor") {
            redirect('home/loginSupervisor');
        } else {
            redirect('home/loginOperator');
        }
    }

    public function loginSuperint()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('login');

        $query = $this->User->getUserByUsername($username);
        $user = $query->row();

        if ($user == null) {
            $this->session->set_flashdata('flash', 'Login Gagal\nUsername atau Password Salah');
            redirect('home', 'refresh');
        } else if ($user != null) {
            if ($password != $user->password_user) {
                $this->session->set_flashdata('flash', 'Login Gagal\nUsername atau Password Salah');
                redirect('home', 'refresh');
            } elseif ($user->role_user != $role) {
                $this->session->set_flashdata('flash', 'Maaf ' . $user->role_user .  ' Tidak Bisa Login Sebagai Superintendent');
                redirect('home', 'refresh');
            } else {
                $userdata = array(
                    'username_user' => $user->username_user,
                    'nama_user' => $user->nama_user,
                    'email_user' => $user->email_user,
                    'nohp_user' => $user->nohp_user,
                    'role_user' => $user->role_user,
                    'status' => 'login',
                );
                $this->session->set_userdata($userdata);
                redirect('dashboard/dashboardSuperint', 'refresh');
            }
        }
    }

    public function loginSupervisor()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('login');

        $query = $this->User->getUserByUsername($username);
        $user = $query->row();

        if ($user == null) {
            $this->session->set_flashdata('flash', 'Login Gagal\nUsername atau Password Salah');
            redirect('home', 'refresh');
        } else if ($user != null) {
            if ($password != $user->password_user) {
                $this->session->set_flashdata('flash', 'Login Gagal\nUsername atau Password Salah');
                redirect('home', 'refresh');
            } elseif ($user->role_user == "Operator") {
                $this->session->set_flashdata('flash', 'Maaf ' . $user->role_user .  ' Tidak Bisa Login Sebagai Supervisor');
                redirect('home', 'refresh');
            } else {
                $userdata = array(
                    'username_user' => $user->username_user,
                    'nama_user' => $user->nama_user,
                    'email_user' => $user->email_user,
                    'nohp_user' => $user->nohp_user,
                    'role_user' => $user->role_user,
                    'status' => 'login',
                );
                $this->session->set_userdata($userdata);
                redirect('dashboard/dashboardSupervisor', 'refresh');
            }
        }
    }
    public function loginOperator()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('login');

        $query = $this->User->getUserByUsername($username);
        $user = $query->row();

        if ($user == null) {
            $this->session->set_flashdata('flash', 'Login Gagal\nUsername atau Password Salah');
            redirect('home', 'refresh');
        } else if ($user != null) {
            if ($password != $user->password_user) {
                $this->session->set_flashdata('flash', 'Login Gagal\nUsername atau Password Salah');
                redirect('home', 'refresh');
            } else {
                $userdata = array(
                    'username_user' => $user->username_user,
                    'nama_user' => $user->nama_user,
                    'email_user' => $user->email_user,
                    'nohp_user' => $user->nohp_user,
                    'role_user' => $user->role_user,
                    'status' => 'login',
                );
                $this->session->set_userdata($userdata);
                redirect('dashboard/dashboardOperator', 'refresh');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
