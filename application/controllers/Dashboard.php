<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
    }
    public function dashboardSuperint()
    {
        $data['judul'] = "Superintendent Dashboard";
        $this->load->view('templates/head', $data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
    }
    public function dashboardSupervisor()
    {
        $data['judul'] = "Supervisor Dashboard";
        $this->load->view('templates/head', $data);
        $this->load->view('home_page/navbar-home');
        $this->load->view('home_page/index');
        $this->load->view('templates/footer');
    }
    public function dashboardOperator()
    {
        $data['judul'] = "Operator Dashboard";
        $this->load->view('templates/head', $data);
        $this->load->view('home_page/navbar-home');
        $this->load->view('home_page/index');
        $this->load->view('templates/footer');
    }
}
