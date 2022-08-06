<?php

class SummaryReport extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');

        $this->load->model('SummaryReportModel');

        $this->load->model('StorageTank');
    }
    public function index()
    {
        $date = new DateTime();
        $time = $date->format('Y-m-d H:i:s');
        $data['judul'] = "Daily Summary Report";
        $data['daily_report'] = $this->SummaryReportModel->getSummaryReport()->result();
        $this->load->view('templates/head', $data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('summary_report/index');
    }
}
