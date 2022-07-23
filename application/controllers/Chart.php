<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('DataReadingModel');
    }
    public function index()
    {

        $query = $this->DataReadingModel->getDataWip();
        $dataWip = $query->result();

        $dataPompa = [];
        foreach ($dataWip as $row) {
            $dataPompa[] = array(
                'time' => $row->time,
                'tanggal' => $row->tanggal_input,
                'average_pompa_1'   => (float)$row->average_pompa_air_1,
                'average_pompa_2' => (float) $row->average_pompa_air_2
            );
        }
        $data['chart_data'] = ($dataPompa);
        $data['judul'] = "Superintendent Dashboard";
        $this->load->view('templates/head',$data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('dashboard/chart', $data);
    }
}
