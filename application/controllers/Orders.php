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
	public function update_order_status(){
		$getOrderStatus = $this->input->post('orderStatus');
		$getOrderId = $this->input->post('orderId');
		$getTxnId = $this->input->post('txnId');
		$getUserId = $this->input->post('userId');
		$this->load->model('Update');
		$this->Update->update_order($getOrderId,$getOrderStatus);
		$this->notify_user($getUserId,$getTxnId,$getOrderStatus);
		echo "	<script>
					alert('".$getOrderId." Order Updated!!!');
					window.location.href='../Orders';
				</script>";
	}
	public function notify_user($userId, $txnId, $orderStatus){
		$token = $this->get_user_token($userId);
		define( 'API_ACCESS_KEY', 'AIzaSyCWPT1fTNW6fCcftBVMUDySMbpxeP-oRVE');
    	//   $registrationIds = ;
    	#prep the bundle
        $msg = array
    	          (
    	'body' => 'Your Order is '.$orderStatus.' with your Transaction ID '.$txnId.'. Thank You!! for choosing the Book My Book!!!',
    	'title' => 'Order Status!!!',
    	          );
    	$fields = array
    	(
    	'to' => $token,
    	'notification' => $msg
    	);
    	$headers = array
    	(
    	'Authorization: key=AAAApBcQDQo:APA91bH0Ekrqfe_M1A09KciAjwMl4qFbbXDUJo3cF9fXYAqSg_LW1YWoMRjc_xXWsqBG0NCitknZ6cWB_l6B9ofPMnC3jCblH9uW1fyfrlKckgrZ2aph50ejDJ3rCc_wCOsfScq8zAJH',
    	'Content-Type: application/json'
    	);
    	#Send Reponse To FireBase Server
    	$ch = curl_init();
    	curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    	curl_setopt( $ch,CURLOPT_POST, true );
    	curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    	curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    	curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    	curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
    	$result = curl_exec($ch );
    	curl_close( $ch );
	}
	public function get_user_token($userId){
		$data = $this->Fetch->fetch_user_token($userId);
		return $data->token;
	}
}