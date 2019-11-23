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
	public function fetch_all_feedbacks(){
		$this->db->select('*');
		$this->db->from('tbl_feedback');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_all_books(){
		$this->db->select('*');
		$this->db->from('tbl_books');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_all_categories(){
		$SQL = "SELECT tbl_category.id, tbl_category.name, tbl_category.img, COUNT(tbl_books.id) count FROM tbl_category LEFT JOIN tbl_books ON tbl_category.name=tbl_books.category GROUP BY tbl_category.name ORDER BY tbl_category.name";

		$query = $this->db->query($SQL);

		return $query->result_array();
	}

}