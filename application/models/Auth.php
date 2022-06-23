<?php

class Auth extends CI_Model
{
	public function getByUsername($usernameUser)
	{
		$this->db->where('usernameUser', $usernameUser);
		return $this->db->get('user');
	}
}
?>