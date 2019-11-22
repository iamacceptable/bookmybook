<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_Data extends CI_Model {
	public function add_new_faq($dataSent){
		$this->db->insert('tbl_faq',$dataSent);
	}
}