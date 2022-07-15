<?php

class ProductionData extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Superintendent Dashboard";
        $this->load->view('templates/head', $data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('production_data/index');
        $this->load->view('production_data/monthly_report/monthly_oil');
        $this->load->view('production_data/monthly_report/monthly_truckedoil');
        $this->load->view('production_data/monthly_report/monthly_gas');
        $this->load->view('production_data/monthly_report/monthly_water');
        
    }
}
