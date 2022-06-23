<?php

class Dashboard extends CI_Controller
{

    public function dashboardSuperint()
    {
        $data['judul'] = "Superintendent Dashboard";
        $this->load->view('templates/head');
        $this->load->view('dashboard/superintendent/sidebar-superintendent', $data);
        $this->load->view('dashboard/superintendent/index');
    }
    public function dashboardSupervisor()
    {
        $data['judul'] = "Supervisor Dashboard";
        $this->load->view('templates/head');
        $this->load->view('home_page/navbar-home', $data);
        $this->load->view('home_page/index');
        $this->load->view('templates/footer');
    }
    public function dashboardOperator()
    {
        $data['judul'] = "Operator Dashboard";
        $this->load->view('templates/head');
        $this->load->view('home_page/navbar-home', $data);
        $this->load->view('home_page/index');
        $this->load->view('templates/footer');
    }
}
