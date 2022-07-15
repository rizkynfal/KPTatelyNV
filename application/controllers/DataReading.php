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
        $data['budi'] = $this->Budi->getDataBudi()->result_array();
        $data['tabel_wip'] = $this->DataReadingModel->getDataWip()->result();
        $data['tabel_data_reading'] = $this->DataReadingModel->getDataReading()->result();
        $data['user'] = $this->User->getUser()->result();
        $this->load->view('templates/head', $data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('data_reading/index', $data);
        $this->load->view('data_reading/input_wip', $data);
        $this->load->view('data_reading/input_data_reading', $data);
        $this->load->view('data_reading/tabel_inputan_wip');
        $this->load->view('data_reading/show_data_reading');
        $this->load->view('templates/footer');
    }
    public function getDataReading()
    {
        $budi = $this->input->post('namaBudi');
        $data['judul'] = "Data Reading";
        $data['budi'] = $this->Budi->getDataBudi()->result_array();
        $data['tabel_wip'] = $this->DataReadingModel->getDataWip()->result();
        $data['tabel_data_reading'] = $this->DataReadingModel->getDataReadingBybudi($budi)->result();
        $data['user'] = $this->User->getUser()->result();
        $this->load->view('templates/head', $data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('data_reading/index', $data);
        $this->load->view('data_reading/input_wip', $data);
        $this->load->view('data_reading/input_data_reading', $data);
        $this->load->view('data_reading/tabel_inputan_wip');
        $this->load->view('data_reading/show_data_reading');
        $this->load->view('templates/footer');
    }

    public function inputDataWip()
    {
        $query = $this->User->getUserByUsername($_SESSION['username_user']);
        $user = $query->row();
        date_default_timezone_set("Asia/Jakarta");
        $date = new DateTime();
        $time = $date->format('Y-m-d H:i:s');
        $tanggal_input = $this->input->post('inputTanggal');
        $dishcarge_press = $this->input->post('inputDischargePressure');
        $water_line_press = $this->input->post('inputWaterLinePressure');
        $motor_freq = $this->input->post('inputMotorFrequency');
        $motor_ampere = $this->input->post('inputMotorAmpere');
        $pumped_water =  $this->input->post('inputPumpedWater');
        $remaks = $this->input->post('inputRemaks');
        $whp_wip = $this->input->post('inputWhpWip');
        $budi_id_budi = $this->input->post('inputBudi');

        $data = array(
            'time' => $time,
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
            'budi_id_budi' =>  $budi_id_budi,

        );
        $this->DataReadingModel->inputWip($data);

        redirect('datareading/index');
    }

    public function inputDataReading()
    {

        $query = $this->User->getUserByUsername($_SESSION['username_user']);
        $user = $query->row();
        date_default_timezone_set("Asia/Jakarta");
        $date = new DateTime();
        $time = $date->format('Y-m-d H:i:s');
        $tanggal = $date->format('d-F-Y');
        $chp_data_reading = $this->input->post('inputChp');
        $thp_data_reading = $this->input->post('inputThp');
        $wht_data_reading = $this->input->post('inputWht');
        $flt_data_reading = $this->input->post('inputFlt');
        $status_data_reading =  $this->input->post('inputStatus');
        $sl_data_reading = $this->input->post('inputSL');
        $spm_data_reading = $this->input->post('inputSpm');
        $whp_data_reading = $this->input->post('inputWhp');
        $flp_data_reading = $this->input->post('inputFlp');
        $w_cut_data_reading = $this->input->post('inputWCut');
        $choke_data_reading = $this->input->post('inputChoke');
        $cl_ppm_data_reading = $this->input->post('inputClPpm');
        $test_header_manifold_press = $this->input->post('pressTestManif');
        $test_header_manifold_temp = $this->input->post('tempTestManif');
        $produc_header_manifold_1_press = $this->input->post('pressProd1tManif');
        $produc_header_manifold_1_temp = $this->input->post('tempProd1Manif');
        $produc_header_manifold_2_press = $this->input->post('pressProd2Manif');
        $produc_header_manifold_2_temp = $this->input->post('tempProd2Manif');
        $test_separator_press = $this->input->post('pressTestSepa');
        $test_separator_diff = $this->input->post('diffTestSepa');
        $test_separator_temp = $this->input->post('tempTestSepa');
        $test_separator_orrifice = $this->input->post('orrificeTestSepa');
        $produc_separator1_press = $this->input->post('pressProdSepa1');
        $produc_separator1_diff = $this->input->post('diffProdSepa1');
        $produc_separator1_temp = $this->input->post('tempProdSepa1');
        $produc_separator1_orrifice = $this->input->post('orrificeProdSepa1');
        $produc_separator2_press = $this->input->post('pressProdSepa2');
        $produc_separator2_diff = $this->input->post('diffProdSepa2');
        $produc_separator2_temp = $this->input->post('tempProdSepa2');
        $produc_separator2_orrifice = $this->input->post('orrificeProdSepa2');
        $budi_id_budi = $this->input->post('inputBudi');
        $data = array(
            'time' => $time,
            'tanggal_data_reading' => $tanggal,
            'chp_data_reading' => $chp_data_reading,
            'thp_data_reading' => $thp_data_reading,
            'wht_data_reading' =>  $wht_data_reading,
            'flt_data_reading' => $flt_data_reading,
            'status_data_reading' => $status_data_reading,
            'sl_data_reading' => $sl_data_reading,
            'spm_data_reading' => $spm_data_reading,
            'whp_data_reading' => $whp_data_reading,
            'flp_data_reading' => $flp_data_reading,
            'w_cut_data_reading' => $w_cut_data_reading,
            'choke_data_reading' => $choke_data_reading,
            'cl_ppm_data_reading' => $cl_ppm_data_reading,
            'test_header_manifold_press' => $test_header_manifold_press,
            'test_header_manifold_temp' => $test_header_manifold_temp,
            'produc_header_manifold_1_press' =>  $produc_header_manifold_1_press,
            'produc_header_manifold_1_temp' => $produc_header_manifold_1_temp,
            'produc_header_manifold_2_press' => $produc_header_manifold_2_press,
            'produc_header_manifold_2_temp' => $produc_header_manifold_2_temp,
            'test_separator_press' => $test_separator_press,
            'test_separator_diff' => $test_separator_diff,
            'test_separator_temp' => $test_separator_temp,
            'test_separator_orrifice' => $test_separator_orrifice,
            'produc_separator1_press' => $produc_separator1_press,
            'produc_separator1_diff' => $produc_separator1_diff,
            'produc_separator1_temp' => $produc_separator1_temp,
            'produc_separator1_orrifice' => $produc_separator1_orrifice,
            'produc_separator2_press' => $produc_separator2_press,
            'produc_separator2_diff' => $produc_separator2_diff,
            'produc_separator2_temp' => $produc_separator2_temp,
            'produc_separator2_orrifice' => $produc_separator2_orrifice,
            'user_id_user' => $user->id_user,
            'user_role_id_role' => $user->role_id_role,
            'budi_id_budi' => $budi_id_budi,

        );
        $this->DataReadingModel->inputDataReading($data);

        redirect('datareading/index');
    }
}
