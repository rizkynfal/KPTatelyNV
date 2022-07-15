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

        $data['judul'] = "Production Calculation";
        $data['storage_tank'] = $this->StorageTank->getDataStorageTank()->result();
        $data['budi'] = $this->Budi->getDataBudi()->result_array();
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
        $date = new DateTime();
        $time = $date->format('Y-m-d H:i:s');
        $nama_tank = $this->input->post('namaTank');
        $oil_cm_production = $this->input->post('inputOilCmProd');
        $oil_bbls_production = $this->input->post('inputOilBblsProd');
        $water_cm_production = $this->input->post('inputWaterCmProd');
        $water_bbls_production = $this->input->post('inputWaterBblsProd');
        $oil_bbls_pump = $this->input->post('inputOilBblsPump');
        $water_bbls_pump = $this->input->post('inputWaterBblsPump');
        $budi = $this->input->post('inputBudi');
        $storageTank = $this->StorageTank->getDataStorageTankbyTankName($nama_tank)->row();
        $dateNow = date_create($storageTank->time);


        if ($dateNow->format('Y-m-d') == $date->format('Y-m-d')) {
            if ($budi != $storageTank->nama_budi) {
                $this->session->set_flashdata('flash', 'Budi tidak boleh berbeda pada hari yang sama');
                redirect('ProduCalcul/index');
            } else {
                $data = array(
                    'time' => $time,
                    'nama_tank' => $nama_tank,
                    'oil_cm_production' => $oil_cm_production,
                    'oil_bbls_production' => $oil_bbls_production,
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
        } else {
            $data = array(
                'time' => $time,
                'nama_tank' => $nama_tank,
                'oil_cm_production' => $oil_cm_production,
                'oil_bbls_production' => $oil_bbls_production,
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
}
