<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch_Count extends CI_Model {
	public function fetch_books_count(){
		$this->db->select('id');
		$this->db->from('tbl_books');
		$this->db->where('flag','1');
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function fetch_user_count(){
		$this->db->select('id');
		$this->db->from('tbl_users');
		$this->db->where('flag','1');
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function fetch_all_user_count(){
		$this->db->select('id');
		$this->db->from('tbl_users');
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function fetch_faq_count(){
		$this->db->select('id');
		$this->db->from('tbl_faq');
		$result = $this->db->get();
		return $result->num_rows();
	}
}