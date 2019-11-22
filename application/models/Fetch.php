<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch extends CI_Model {
	public function fetch_all_users(){
		$this->db->select('id, name, email, mobile, address, city, state, pincode, refcode, flag');
		$this->db->from('tbl_users');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_all_faq(){
		$this->db->select('*');
		$this->db->from('tbl_faq');
		$result = $this->db->get();
		return $result->result_array();
	}

}