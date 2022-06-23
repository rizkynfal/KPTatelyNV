<?php

class Dashboard extends CI_Controller
{

    public function dashboardSuperint()
    {
        $data['judul'] = "Superintendent Dashboard";
        $this->load->view('templates/head');
        $this->load->view('dashboard/superintendent/sidebar-superintendent',$data);
        $this->load->view('dashboard/superintendent/index');
    }
    public function dashboardSupervisor()
    {
        $data['judul'] = "Superintendent Dashboard";
        $this->load->view('templates/head');
        $this->load->view('dashboard/sidebar-superintendent');
        $this->load->view('dashboard/superintendent/index');
        $this->load->view('templates/footer');
    }
    public function dashboardOperator()
    {
        $data['judul'] = "Superintendent Dashboard";
        $this->load->view('templates/head');
        $this->load->view('dashboard/sidebar-superintendent');
        $this->load->view('dashboard/superintendent/index');
        $this->load->view('templates/footer');
    }
}
