<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['login'])){
        	redirect('Authentication');
        }
        $this->load->model('Fetch');
    }
	public function index(){
		redirect('Orders/all_orders');
	}
	public function all_orders(){
		$dataLoad['orders'] = $this->fetch_orders();
		$dataLoad['header'] = 'Orders';
		$dataLoad['sidebar'] = 'Orders';
		$this->load->view('Orders/all_list',$dataLoad);
	}
	public function fetch_orders(){
		return $this->Fetch->fetch_orders();
	}
	public function bmb_wallet(){
		$dataLoad['header'] ='BMB Wallet';
		$dataLoad['sidebar'] = 'Wallet';
		$this->load->view('Wallet/wallet',$dataLoad);
	}
	public function generate_bill_slip($orderId){
		$dataLoad['user'] = $this->fetch_user_details_order_id($orderId);
		$dataLoad['book'] = $this->fetch_book_details($orderId);
		$dataLoad['txn'] = $this->fetch_transaction_details($orderId);
		$dataLoad['header'] ='Bill Slip';
		$dataLoad['sidebar'] = 'Receipts';
		$this->load->view('Reciepts/reciept',$dataLoad);
	}
	public function fetch_user_details_order_id($orderId){
		return $this->Fetch->fetch_user_details_order_id($orderId);
	}
	public function fetch_transaction_details($orderId){
		return $this->Fetch->fetch_transaction_details($orderId);
	}
	public function fetch_book_details($orderId){
		return $this->Fetch->fetch_book_details($orderId);
	}
}