<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedbacks extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['login'])){
        	redirect('Authentication');
        }
    }
	public function index(){
		$dataLoad['feedbacks'] = $this->fetch_all_feedbacks();
		$dataLoad['header'] ='Feedbacks';
		$dataLoad['sidebar'] = 'Feedbacks';
		$this->load->view('Feedbacks/feedbacks',$dataLoad);
	}
	public function fetch_all_feedbacks(){
		$this->load->model('Fetch');
		return $this->Fetch->fetch_all_feedbacks();
	}
	public function get_user_token($userId){
		$this->load->model('Fetch');
		$data = $this->Fetch->fetch_user_token($userId);
		return $data->token;
	}
	public function notify_user($userId){
		$token = $this->get_user_token($userId);
		define( 'API_ACCESS_KEY', 'AIzaSyCWPT1fTNW6fCcftBVMUDySMbpxeP-oRVE');
    	//   $registrationIds = ;
    	#prep the bundle
        $msg = array
    	          (
    	'body' => 'Your FeedBack is valuable to us :) Please Rate Book My Book on the Play Store by tapping this!!! ',
    	'title' => 'Thank You For your Feedback to us!!!',
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
        echo "  <script>
                    alert('".$userId." Notified!!!');
                    window.location.href='..';
                </script>";
	}
}