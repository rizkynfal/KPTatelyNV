<?php

class DataReading extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Budi');

        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = "Data Reading";
        $data['budi'] =$this->Budi->getDataBudi()->result();
        $this->load->view('templates/head', $data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('data_reading/index',$data);
        $this->load->view('data_reading/input_data_reading');
        $this->load->view('data_reading/show_data_reading');
    }

}
