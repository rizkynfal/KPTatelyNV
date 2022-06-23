<?php

class Superintendent extends CI_Controller
{
    public function productionData()
    {
        $data['judul'] = "Superintendent Dashboard";
        $this->load->view('templates/head');
        $this->load->view('dashboard/superintendent/sidebar-superintendent',$data);
        $this->load->view('superintendent/data_production/production_data');
    }
    public function monthlyOilProduced()
    {
        $data['judul'] = "Monthly Oil Production Data";
        $this->load->view('templates/head');
        $this->load->view('dashboard/superintendent/sidebar-superintendent',$data);
        $this->load->view('superintendent/data_production/monthly_oil');
    }
    public function monthlyWaterProduced()
    {
        $data['judul'] = "Monthly Oil Production Data";
        $this->load->view('templates/head');
        $this->load->view('dashboard/superintendent/sidebar-superintendent',$data);
        $this->load->view('superintendent/data_production/monthly_water');
    }
    public function monthlyGasProduced()
    {
        $data['judul'] = "Monthly Oil Production Data";
        $this->load->view('templates/head');
        $this->load->view('dashboard/superintendent/sidebar-superintendent',$data);
        $this->load->view('superintendent/data_production/monthly_gas');
    }
    public function monthlyTruckoilProduced()
    {
        $data['judul'] = "Monthly Trucked Oil Production Data";
        $this->load->view('templates/head');
        $this->load->view('dashboard/superintendent/sidebar-superintendent',$data);
        $this->load->view('superintendent/data_production/monthly_truckedoil');
    }


}
