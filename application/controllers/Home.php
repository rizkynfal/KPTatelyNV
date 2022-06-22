<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Tately NV.';
        $this->load->view('templates/head');
        $this->load->view('home_page/navbar-home', $data);
        $this->load->view('home_page/index');
        $this->load->view('templates/footer');
    }

}
