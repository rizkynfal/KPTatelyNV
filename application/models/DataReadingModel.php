<?php

class DataReadingModel extends CI_Model
{
    public function inputWip($data)
    {
        return $this->db->insert('data_reading', $data);
    }
    public function sumPumpedWater()
    {
        $this->db->select('sum(column)');
        $this->db->from('data_reading');

        $query = $this->db->get()->row();
        return $query;
    }
}
