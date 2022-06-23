<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Auth');


        $this->load->library('form_validation');


        $this->load->library('session');
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

        if (!$user) return FALSE;
        if (!password_verify($password, $user->password)) return FALSE;

        $userdata = array(
            'role' => $user->role,
            'username' => $user->username,
            'name' => $user->name,
            'status' => 'login',
        );
        $this->session->set_userdata($userdata);
        redirect('dashboard');
    }

    public function loginSupervisor()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $query = $this->Auth->getByUsername($username);
        $user = $query->row();

        if (!$user) return FALSE;
        if ($user->role != "supervisor") return FALSE;
        if (!password_verify($password, $user->password)) return FALSE;

        $userdata = array(
            'role' => $user->role,
            'username' => $user->username,
            'name' => $user->name,
            'status' => 'login',
        );
        $this->session->set_userdata($userdata);

        redirect('dashboard/dashboardSupervisor');
    }
    public function loginOperator()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $query = $this->Auth->getByUsername($username);
        $user = $query->row();

        if (!$user) return FALSE;
        if ($user->role != "operator") return FALSE;
        if (!password_verify($password, $user->password)) return FALSE;

        $userdata = array(
            'role' => $user->role,
            'username' => $user->username,
            'name' => $user->name,
            'status' => 'login',
        );
        $this->session->set_userdata($userdata);

        redirect('dashboard/dashboardOperator');
    }
}
