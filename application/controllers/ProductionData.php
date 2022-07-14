<?php

class ProductionData extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Superintendent Dashboard";
        $this->load->view('templates/head',$data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('production_data/index');
    }
    public function monthlyOilProduced()
    {
        $data['judul'] = "Monthly Oil Production Data";
        $this->load->view('templates/head',$data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('production_data/monthly_report/monthly_oil');
    }
    public function monthlyWaterProduced()
    {
        $data['judul'] = "Monthly Oil Production Data";
        $this->load->view('templates/head',$data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('production_data/monthly_report/monthly_water');
    }
    public function monthlyGasProduced()
    {
        $data['judul'] = "Monthly Oil Production Data";
        $this->load->view('templates/head',$data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('production_data/monthly_report/monthly_gas');
    }
    public function monthlyTruckoilProduced()
    {
        $data['judul'] = "Monthly Trucked Oil Production Data";
        $this->load->view('templates/head',$data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('production_data/monthly_report/monthly_truckedoil');
    }


}
