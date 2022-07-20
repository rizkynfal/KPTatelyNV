<?php

class StorageTank extends CI_Model
{
  public function inputStorageTank($data)
  {
    return $this->db->insert('storage_tank', $data);
  }
  public function getDataStorageTank()
  {
    $this->db->order_by('time', 'ASC');
    return $this->db->get('storage_tank');
  }
  public function getDataStorageTankbyName($tankname)
  {
    $this->db->where('nama_tank', $tankname);
    $this->db->order_by('time', 'DESC');
    return $this->db->get('storage_tank');
  }
  public function getDataStorageTankbyDate($date)
  {
    $this->db->where('time',$date);
    return $this->db->get('storage_tank');
  }
}
