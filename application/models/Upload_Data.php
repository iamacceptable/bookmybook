<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_Data extends CI_Model {
	public function add_new_faq($dataSent){
		$this->db->insert('tbl_faq',$dataSent);
	}
	public function add_new_category($dataSent){
		$this->db->insert('tbl_category',$dataSent);
	}
	public function add_new_book($dataSent){
		$this->db->insert('tbl_books',$dataSent);
	}
	public function add_multiple_books($dataSent){
		$this->db->insert_batch('tbl_books',$dataSent);
	}
}