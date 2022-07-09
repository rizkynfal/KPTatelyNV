<?php

class DataReading extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Budi');

        $this->load->model('User');

        $this->load->model('DataReadingModel');

        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = "Data Reading";
        $data['budi'] = $this->Budi->getDataBudi()->result();
        $data['tabel_wip'] = $this->DataReadingModel->getDataWip()->result();
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

        $data['budi'] = $this->Budi->getDataBudi()->row();
        $query = $this->User->getUserByUsername($_SESSION['username_user']);
        $user = $query->row();
        date_default_timezone_set("Asia/Jakarta");
        $date = new DateTime();
        $result = $date->format('Y-m-d H:i:s');
        $tanggal_input = $this->input->post('inputTanggal');
        $dishcarge_press = $this->input->post('inputDischargePressure');
        $water_line_press = $this->input->post('inputWaterLinePressure');
        $motor_freq = $this->input->post('inputMotorFrequency');
        $motor_ampere = $this->input->post('inputMotorAmpere');
        $pumped_water =  $this->input->post('inputPumpedWater');
        $remaks = $this->input->post('inputRemaks');
        $whp_wip = $this->input->post('inputWhpWip');

        $data = array(
            'time' => $result,
            'tanggal_input' => $tanggal_input,
            'discharge_press' => $dishcarge_press,
            'water_line_press' => $water_line_press,
            'motor_freq' =>  $motor_freq,
            'motor_ampere' => $motor_ampere,
            'pumped_water' => $pumped_water,
            'remarks' => $remaks,
            'whp_wip' => $whp_wip,
            'user_id_user' => $user->id_user,
            'user_role_id_role' => $user->role_id_role,
            'budi_id_budi' => $data['budi']->id_budi,

        );
        $this->DataReadingModel->inputWip($data);

        redirect('datareading/index');
    }
}
