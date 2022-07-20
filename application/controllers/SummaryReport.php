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
        $data['judul'] = "Daily Summary Report";
        $data['storage_tank'] = $this->StorageTank->getDataStorageTank()->result();
        $this->load->view('templates/head', $data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('summary_report/index');
    }

}
