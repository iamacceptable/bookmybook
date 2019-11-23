<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Model {
	public function delete_faq($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_faq');
	}
	public function delete_category($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_category');
	}
}