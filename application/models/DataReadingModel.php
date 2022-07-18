<?php

class DataReadingModel extends CI_Model
{
    public function getDataWip()
    {

        $this->db->order_by('time', 'ASC');
        return $this->db->get('wip');
    }
    public function inputWip($data)
    {
        return $this->db->insert('wip', $data);
    }
    public function getDataWipbyDate($date)
    {
        $this->db->where('tanggal_input', $date);
        return $this->db->get('wip');
    }
    public function inputDataReading($data)
    {
        return $this->db->insert('data_reading', $data);
    }

    public function getDataReading()
    {
        $this->db->order_by('time', 'ASC');
        return $this->db->get('data_reading');
    }
    public function getDataReadingBybudi($budi)
    {
        $this->db->where('budi_id_budi', $budi);
        $this->db->order_by('tanggal_data_reading', 'DESC');
        return $this->db->get('data_reading');
    }
}
