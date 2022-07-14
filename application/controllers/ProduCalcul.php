<?php

class ProduCalcul extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
    }
    public function index()
    {
        $data['judul'] = "Production Calculation";
        $this->load->view('templates/head', $data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('produc_cal/index');
        $this->load->view('produc_cal/input_prod_cal');
        $this->load->view('produc_cal/table_prod_cal');
        $this->load->view('templates/footer');
    }
}
