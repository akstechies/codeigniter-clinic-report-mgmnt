<?php
class User_model extends CI_Model
{

	function can_login($userId, $username, $password)
	{
		$this->db->where('user_id', $userId);
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('user_login');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	function allReports()
	{
		$this->db->order_by('id', 'DESC');
		$user_id = $this->session->userdata('user_id');
		$this->db->where('user_id', $user_id);
		$result = $this->db->get('user_report')->result_array();
		return $result;
	}

	function getAll($table)
	{
		$this->db->order_by('id', 'DESC');
		$result = $this->db->get($table)->result_array();
		return $result;
	}

}
