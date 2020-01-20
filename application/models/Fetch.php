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

	public function fetch_categories(){
		$this->db->select('name');
		$this->db->from('tbl_category');
		$result = $this->db->get();
		return $result->result_array();
	}	
	public function fetch_all_categories(){
		$SQL = "SELECT tbl_category.id, tbl_category.name, tbl_category.img, COUNT(tbl_books.id) count FROM tbl_category LEFT JOIN tbl_books ON tbl_category.name=tbl_books.category GROUP BY tbl_category.name ORDER BY tbl_category.name";
		$query = $this->db->query($SQL);
		return $query->result_array();
	}
	public function auth($user, $pass){
		$this->db->select('id');
		$this->db->from('tbl_admin');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$result = $this->db->get();
		if($result->num_rows() == 1){
			return $result->result_array();
		}
		else
			return FALSE;
	}
	public function fetch_orders(){
		$fetchOrdersQuery = "SELECT tbl_txn.uid, tbl_txn.txnid, tbl_txn.status, tbl_txn.price, tbl_txn.timedate, tbl_orders.id AS oi, tbl_orders.bid, tbl_orders.qty, tbl_orders.currentStatus, tbl_books.* FROM tbl_orders JOIN tbl_txn ON tbl_orders.txnid=tbl_txn.txnid JOIN tbl_books ON tbl_orders.bid=tbl_books.id ORDER BY tbl_txn.timedate DESC";
		$query = $this->db->query($fetchOrdersQuery);
		return $query->result_array();
	}
	public function fetch_wallet_details(){
		$this->db->select('name, id, wallet');
		$this->db->from('tbl_users');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_books_not_found(){
		$this->db->select('*');
		$this->db->from('tbl_book_not_found');
		$getBooks = $this->db->get();
		return $getBooks->result_array();
	}
	public function fetch_books_not_found_id($id){
		$this->db->select('*');
		$this->db->from('tbl_book_not_found');
		$this->db->where('id',$id);
		$getBooks = $this->db->get();
		return $getBooks->row();
	}
	public function fetch_user_details_order_id($orderId){
		$this->db->select('tbl_users.name, tbl_users.email, tbl_users.mobile, tbl_users.address, tbl_users.pincode');
		$this->db->from('tbl_orders');
		$this->db->join('tbl_users', 'tbl_orders.uid=tbl_users.id');
		$this->db->where('tbl_orders.id',$orderId);
		$result = $this->db->get();
		return $result->row();
	}
	public function fetch_transaction_details($orderId){
		$this->db->select('tbl_txn.txnid, tbl_txn.timedate, tbl_txn.wallet, tbl_orders.qty, tbl_orders.id');
		$this->db->from('tbl_orders');
		$this->db->join('tbl_txn', 'tbl_orders.txnid=tbl_txn.txnid');
		$this->db->where('tbl_orders.id',$orderId);
		$result = $this->db->get();
		return $result->row();
	}
	public function fetch_book_details($orderId){
		$this->db->select('tbl_books.*');
		$this->db->from('tbl_orders');
		$this->db->join('tbl_books', 'tbl_orders.bid=tbl_books.id');
		$this->db->where('tbl_orders.id',$orderId);
		$result = $this->db->get();
		return $result->row();
	}
	public function fetch_user_token($userId){
		$this->db->select('token');
		$this->db->from('tbl_users');
		$this->db->where('id',$userId);
		$result = $this->db->get();
		return $result->row();
	}
	public function fetch_refer_n_earn(){
		$this->db->select('tbl_refer.*,tbl_users.name');
		$this->db->from('tbl_refer');
		$this->db->join('tbl_users','tbl_refer.rfee=tbl_users.id');
		$result = $this->db->get();
		return $result->result_array();
	}
} 