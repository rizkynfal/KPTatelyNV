<?php

class User extends CI_Model
{
	public function getByUsername($usernameUser)
	{
		$this->db->where('username_user', $usernameUser);
		return $this->db->get('user');
	}

	public function getRolebyIdUser($usernameUser)
	{
		$this->db->where('username_user', $usernameUser);
		$data = $this->db->get('user');
		$role = $data->row();
		$this->db->where('id_role', $role->role_id_role);
		return $this->db->get('role');
	}
}
