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
    // public function TotalPumpedWater()
    // {
    //     $this->db->select('SUM(pumped_water)');
    //     $this->db->from('wip');

    //     $query = $this->db->get();
    //     return $this->db->insert('wip', $query);
    // }
}
