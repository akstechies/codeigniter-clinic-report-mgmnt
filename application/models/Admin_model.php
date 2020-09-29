<?php
class Admin_model extends CI_Model
{

	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('admin_login');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	function allReports()
	{
		$this->db->order_by('id', 'DESC');
		$result = $this->db->get('user_report')->result_array();
		return $result;
	}

	function viewReport($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get('user_report');
		return $result->row_array();
	}

	function getAll($table)
	{
		$this->db->order_by('id', 'DESC');
		$result = $this->db->get($table)->result_array();
		return $result;
	}

}
