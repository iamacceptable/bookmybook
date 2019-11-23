<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_Data extends CI_Model {
	public function add_new_faq($dataSent){
		$this->db->insert('tbl_faq',$dataSent);
	}
	public function add_new_category($dataSent){
		$this->db->insert('tbl_category',$dataSent);
	}
}