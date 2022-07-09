<?php

class DataReading extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Budi');

        $this->load->model('DataReadingModel');

        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = "Data Reading";
        $data['budi'] = $this->Budi->getDataBudi()->result();
        $this->load->view('templates/head', $data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('data_reading/index', $data);
        $this->load->view('data_reading/input_data_reading');
        $this->load->view('data_reading/show_data_reading');
        $this->load->view('data_reading/tabel_inputan');
        $this->load->view('templates/footer_js.php');
    }

    public function inputDataWip()
    {

        date_default_timezone_set("Asia/Jakarta");
        $time = date("H:i:s");
        $dishcarge_press = $this->input->post('inputDischargePressure');
        $water_line_press =$this->input->post('inputWaterLinePressure');
        $motor_freq = $this->input->post('inputMotorFrequency');
        $motor_ampere = $this->input->post('inputMotorAmpere');
        $pumped_water =  $this->input->post('inputPumpedWater');
        $remaks = $this->input->post('inputRemaks');


        $data['data_wip'] = array(
            'time' => $time,
            'discharge_press' => $dishcarge_press,
            'water_line_press' => $water_line_press,
            'motor_freq' =>  $motor_freq,
            'motor_ampere' => $motor_ampere,
            'pumped_water' => $pumped_water,
            'remarks' => $remaks,

        );
        $data['judul'] = "Data Reading";
        $data['budi'] = $this->Budi->getDataBudi()->result();
        $this->load->view('templates/head', $data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('data_reading/index', $data);
        $this->load->view('data_reading/input_data_reading');
        $this->load->view('data_reading/show_data_reading');
        $this->load->view('data_reading/tabel_inputan');
        $this->load->view('templates/footer_js.php');
    }
}
