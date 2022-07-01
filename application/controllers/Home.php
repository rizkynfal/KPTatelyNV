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

    public function loginSuperint()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

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
                redirect('dashboard/dashboardSuperint', 'refresh');
            }
        }
    }

    public function loginSupervisor()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->Auth->getByUsername($username);
        $user = $query->row();

        if ($user->usernameUser != $username || $user->passwordUser != $password) {
            redirect('home', 'refresh');
        } else {
            redirect('dashboard/dashboardSupervisor', 'refresh');
        }
    }
    public function loginOperator()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->Auth->getByUsername($username);
        $user = $query->row();

        if ($user->usernameUser != $username || $user->passwordUser != $password) {
            redirect('home', 'refresh');
        } else {
            redirect('dashboard/dashboardOperator', 'refresh');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
