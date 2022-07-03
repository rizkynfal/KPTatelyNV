<?php

class DataReadingModel extends CI_Model
{
    public function inputWip($data)
    {
        return $this->db->insert('data_reading', $data);
    }
}
