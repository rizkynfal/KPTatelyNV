<?php

class Auth extends CI_Model
{
	public function getByUsername($id)
	{
		$this->db->where('username', $id);
		return $this->db->get('user');
	}
}
?>