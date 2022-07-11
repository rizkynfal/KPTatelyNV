<?php

class Budi extends CI_Model
{
  public function getDataBudi()
  {
    return $this->db->get('budi');
  }
  public function getBudibyId($idBudi)
  {
    $this->db->where('id_budi',$idBudi);
    return $this->db->get('budi');
  }
}
