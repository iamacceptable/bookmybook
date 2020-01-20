<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sliders_model extends CI_Model {
	public function fetch_all_sliders(){
		$this->db->select('*');
		$this->db->from('tbl_banner');
		$getSliders = $this->db->get();
		return $getSliders->result_array();
	}
	public function change_slide_flag($slideId, $flag){
		$this->db->set('flag', $flag);
		$this->db->where('id', $slideId);
		$this->db->update('tbl_banner');
	}
	public function update_slide($slideId, $slide_image){
		$this->db->set('flag', '1');
		$this->db->set('img', $slide_image);
		$this->db->where('id', $slideId);
		$this->db->update('tbl_banner');	
	}
}
