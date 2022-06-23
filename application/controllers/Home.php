<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Auth');
    }


    public function index()
    {
        $data['judul'] = "Tately NV.";
        $this->load->view('templates/head');
        $this->load->view('home_page/navbar-home', $data);
        $this->load->view('home_page/index');
        $this->load->view('templates/footer');
    }

    public function loginSuperint()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->Auth->getByUsername($username);
        $user = $query->row();

        if ($user->usernameUser != $username || $user->passwordUser != $password) {
            redirect('home', 'refresh');
        } else {
            redirect('dashboard/dashboardSuperint', 'refresh');
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
}
