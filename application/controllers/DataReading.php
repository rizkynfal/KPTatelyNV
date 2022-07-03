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
        $this->load->view('templates/footer_js.php');
    }

    public function inputDataWip()
    {
        date_default_timezone_set("Asia/Jakarta");
        $time = date("H:i:s");
        $tanggal = $_POST('inputTanggal');
        $dishcarge_press = $_POST('inputDischargePressure');
        $water_line_press = $_POST('inputWaterLinePressure');
        $motor_freq = $_POST('inputMotorFrequency');
        $motor_ampere = $_POST('inputMotorAmpere');
        $pumped_water = $_POST('inputPumpedWater');
        $total_jam_pompa = $_POST();
        $remaks = $_POST('inputRemaks');
        $total_pompa_air = $_POST('');
        $whp_wip = $_POST();
        $total_injected_water = $_POST();
        $total_average_pompa = $_POST();
        $id_budi = $_POST('nama_budi');
        $data = array(
            'time' => $this->input->post('namaMitra'),
            'discharge_press' => $this->input->post('alamatMitra'),
            'water_line_press' => $this->input->post('noHpMitra'),
            'motor_freq' => $this->input->post('jenisUsaha'),
            'motor_ampere' => $this->input->post('deskripsi'),
            'pumped_water' => $this->input->post('fotoUsaha'),
            'total_jam_pompa' => $this->input->post('fotoUsaha'),
            'average_pompa_air' => $this->input->post('fotoUsaha'),
            'remarks' => $this->input->post('fotoUsaha'),
            'total_pompa_air' => $this->input->post('fotoUsaha'),
            'whp_wip' => $this->input->post('fotoUsaha'),
            'total_injected_water' => $this->input->post('fotoUsaha'),
            'total_average_pompa' => $this->input->post('fotoUsaha'),
            ''
        );
    }
}
