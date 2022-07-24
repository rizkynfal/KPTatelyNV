<?php

class ProduCalcul extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('StorageTank');
        $this->load->model('User');
        $this->load->model('Budi');
    }
    public function index()
    {
        $date =  date_format(date_sub(date_create('now'), date_interval_create_from_date_string("1 days")), 'Y-F-d');
        $data['judul'] = "Production Calculation";
        $data['storage_tank'] = $this->StorageTank->getDataStorageTank()->result();
        $data['budi'] = $this->Budi->getDataBudi()->result_array();
        $data['storage_tank_1'] = $this->StorageTank->getDataStorageTankbyDate($date)->result();
        $data['User'] = $this->User->getUser()->result();
        $this->load->view('templates/head', $data);
        $this->load->view('dashboard/sidebar-dashboard');
        $this->load->view('dashboard/index');
        $this->load->view('produc_cal/index', $data);
        $this->load->view('produc_cal/input_prod_cal');
        $this->load->view('produc_cal/table_prod_cal');
        $this->load->view('templates/footer');
    }
    public function inputTank()
    {

        $query = $this->User->getUserByUsername($_SESSION['username_user']);
        $user = $query->row();
        date_default_timezone_set("Asia/Jakarta");
        $date = date_create('2022-07-24 03:22:11');
        $time = $date->format('Y-m-d H:i:s');
        $nama_tank = $this->input->post('namaTank');
        $oil_cm_production = $this->input->post('inputOilCmProd');
        $oil_bbls_production = $this->input->post('inputOilBblsProd');
        $water_cm_production = $this->input->post('inputWaterCmProd');
        $water_bbls_production = $this->input->post('inputWaterBblsProd');
        $oil_bbls_pump = $this->input->post('inputOilBblsPump');
        $water_bbls_pump = $this->input->post('inputWaterBblsPump');
        $budi = $this->input->post('selectBudi');

        $totalProd = $this->StorageTank->getDailyTotalProd()->row();
        $storageTank = $this->StorageTank->getDataStorageTankbyName($nama_tank)->row();

        $dateNow = date_create('now');
        if (isset($storageTank)) {
            $dateNow = date_create($storageTank->time);
            $lastInsertOil = $storageTank->oil_cm_production;
            $lastInsertWater = $storageTank->water_cm_production;
        } else {
            $dateNow = date_create('now');
            $lastInsertOil = 0;
            $lastInsertWater = 0;
        }


        if ($nama_tank != "-") {
            if ($dateNow->format('Y-m-d') == $date->format('Y-m-d')) {

                if ((int)date_format($date, 'H') >= 23 || date_format($date, 'H') == "00" ||  date_format($date, 'H') == "01") {
                    $data = array(
                        'time' => $time,
                        'tanggal_input' => date_format($date, 'Y-F-d'),
                        'nama_tank' => $nama_tank,
                        'oil_cm_production' => $oil_cm_production,
                        'oil_bbls_production' => $oil_bbls_production,
                        'rate_oil_per3jam' => $oil_bbls_production,
                        'water_cm_production' => $water_cm_production,
                        'water_bbls_production' => $water_cm_production,
                        'oil_bbls_pump' => $oil_bbls_pump,
                        'water_bbls_pump' => $water_bbls_pump,
                        'nama_budi' => $budi,
                        'user_id_user' => $user->id_user,
                        'user_role_id_role' => $user->role_id_role
                    );
                    $this->StorageTank->inputStorageTank($data);
                    $data_closing = array(
                        'time' => date_format(date_sub(date_create('now 23:59:59'), date_interval_create_from_date_string("1 days")), 'Y-m-d H:i:s'),
                        'tanggal_input' => date_format(date_sub(date_create('now'), date_interval_create_from_date_string("1 days")), 'Y-F-d'),
                        'nama_tank' => $nama_tank,
                        'oil_cm_production' => $oil_cm_production,
                        'oil_bbls_production' => $oil_bbls_production,
                        'rate_oil_per3jam' => $oil_bbls_production,
                        'water_cm_production' => $water_cm_production,
                        'water_bbls_production' => ($lastInsertWater - $water_bbls_production) * 1.7,
                        'oil_bbls_pump' => $oil_bbls_pump,
                        'water_bbls_pump' => $water_bbls_pump,
                        'nama_budi' => $budi,
                        'user_id_user' => $user->id_user,
                        'user_role_id_role' => $user->role_id_role
                    );

                    $this->StorageTank->inputStorageTank($data_closing);
                    redirect('ProduCalcul/index');
                } else {
                    $data = array(
                        'time' => $time,
                        'tanggal_input' => date_format($date, 'Y-F-d'),
                        'nama_tank' => $nama_tank,
                        'oil_cm_production' => $oil_cm_production,
                        'oil_bbls_production' => $oil_bbls_production,
                        'rate_oil_per3jam' => ($oil_cm_production - $lastInsertOil) * 1.7,
                        'water_cm_production' => $water_cm_production,
                        'water_bbls_production' => ($lastInsertWater - $water_bbls_production) * 1.7,
                        'oil_bbls_pump' => $oil_bbls_pump,
                        'water_bbls_pump' => $water_bbls_pump,
                        'nama_budi' => $budi,
                        'user_id_user' => $user->id_user,
                        'user_role_id_role' => $user->role_id_role
                    );
                    $this->StorageTank->inputStorageTank($data);
                    redirect('ProduCalcul/index');
                }
            } else {
                if ((int)date_format($date, 'H') >= 23 || date_format($date, 'H') == "00" ||  date_format($date, 'H') == "01") {
                    $data = array(
                        'time' => $time,
                        'tanggal_input' => date_format($date, 'Y-F-d'),
                        'nama_tank' => $nama_tank,
                        'oil_cm_production' => $oil_cm_production,
                        'oil_bbls_production' => $oil_bbls_production,
                        'rate_oil_per3jam' => $oil_bbls_production,
                        'water_cm_production' => $water_cm_production,
                        'water_bbls_production' => ($lastInsertWater - $water_bbls_production) * 1.7,
                        'oil_bbls_pump' => $oil_bbls_pump,
                        'water_bbls_pump' => $water_bbls_pump,
                        'nama_budi' => $budi,
                        'user_id_user' => $user->id_user,
                        'user_role_id_role' => $user->role_id_role
                    );
                    $this->StorageTank->inputStorageTank($data);
                    $data_closing = array(
                        'time' => date_format(date_sub(date_create('now 23:59:59'), date_interval_create_from_date_string("1 days")), 'Y-m-d H:i:s'),
                        'tanggal_input' => date_format(date_sub(date_create('now'), date_interval_create_from_date_string("1 days")), 'Y-F-d'),
                        'nama_tank' => $nama_tank,
                        'oil_cm_production' => $oil_cm_production,
                        'oil_bbls_production' => $oil_bbls_production,
                        'rate_oil_per3jam' => $oil_bbls_production,
                        'water_cm_production' => $water_cm_production,
                        'water_bbls_production' => ($lastInsertWater - $water_bbls_production) * 1.7,
                        'oil_bbls_pump' => $oil_bbls_pump,
                        'water_bbls_pump' => $water_bbls_pump,
                        'nama_budi' => $budi,
                        'user_id_user' => $user->id_user,
                        'user_role_id_role' => $user->role_id_role
                    );

                    $this->StorageTank->inputStorageTank($data_closing);
                    redirect('ProduCalcul/index');
                } else {
                    $data = array(
                        'time' => $time,
                        'tanggal_input' => date_format($date, 'Y-F-d'),
                        'nama_tank' => $nama_tank,
                        'oil_cm_production' => $oil_cm_production,
                        'oil_bbls_production' => $oil_bbls_production,
                        'rate_oil_per3jam' => ($oil_cm_production - $lastInsertOil) * 1.7,
                        'water_cm_production' => $water_cm_production,
                        'water_bbls_production' => $water_bbls_production,
                        'oil_bbls_pump' => $oil_bbls_pump,
                        'water_bbls_pump' => $water_bbls_pump,
                        'nama_budi' => $budi,
                        'user_id_user' => $user->id_user,
                        'user_role_id_role' => $user->role_id_role
                    );
                    $this->StorageTank->inputStorageTank($data);
                    redirect('ProduCalcul/index');
                }
            }
        } else {
            $this->session->set_flashdata('flash', 'Pilih Tank Yang Ingin Diinput');
            redirect('ProduCalcul/index', 'refresh');
        }
    }
}
