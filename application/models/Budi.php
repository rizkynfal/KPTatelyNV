<?php

class Budi extends CI_Model
{
    public function getDataBudi()
    {
      return $this->db->get('budi');
        
    }
}
