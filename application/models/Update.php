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
	public function activate_user($userId){
		$this->db->set('flag','1');
		$this->db->where('id',$userId);
		$this->db->update('tbl_users');
	}
	public function deactivate_user($userId){
		$this->db->set('flag','0');
		$this->db->where('id',$userId);
		$this->db->update('tbl_users');
	}
	public function update_wallet($userId, $walletAmount){
		$query = "UPDATE tbl_users SET wallet=wallet+'".$walletAmount."' WHERE id='".$userId."'";
		$this->db->query($query);
	}
	public function update_order($orderId, $orderStatus){
		$this->db->set('currentStatus',$orderStatus);
		$this->db->where('id',$orderId);
		$this->db->update('tbl_orders');
	}
}