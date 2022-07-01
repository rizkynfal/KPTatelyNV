<?php

class User extends CI_Model
{
	public function getUserByUsername($usernameUser)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username_user',$usernameUser);
		$this->db->join('role', 'role.id_role = role_id_role');
		$query = $this->db->get();
		return $query;
	}
}
