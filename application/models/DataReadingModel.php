<?php

class DataReadingModel extends CI_Model
{
    public function getDataWip()
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date('d-F-Y');
        $this->db->where('tanggal_input', $date);
        $this->db->order_by('time', 'ASC');
        return $this->db->get('wip');
    }
    public function inputWip($data)
    {
        return $this->db->insert('wip', $data);
    }

    public function inputDataReading($data)
    {
        return $this->db->insert('data_reading', $data);
    }

    public function getDataReading()
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date('d-F-Y');
        $this->db->where('tanggal_data_reading', $date);
        $this->db->order_by('time', 'ASC');
        return $this->db->get('data_reading');
    }
    public function getDataReadingBybudi()
    {

    }
}
