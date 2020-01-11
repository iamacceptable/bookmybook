<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['login'])){
        	redirect('Authentication');
        }
    }
	public function index(){
		$dataLoad['users'] = $this->fetch_all_users();
		$dataLoad['header'] = 'Users | All Users';
		$dataLoad['sidebar'] = 'Users';
		// print_r($dataLoad['users']);
		$this->load->view('Users/all_list',$dataLoad);
	}
	public function fetch_all_users(){
		$this->load->model('Fetch');
		return $this->Fetch->fetch_all_users();
	}
	public function activate_user($uId){
		$this->load->model('Update');
		$this->Update->activate_user($uId);
		echo "	<script>
					alert('".$uId." User Activated!!!');
					window.location.href='..';
				</script>";
	}
	public function deactivate_user($uId){
		$this->load->model('Update');
		$this->Update->deactivate_user($uId);
		echo "	<script>
					alert('".$uId." User Deactivated!!!');
					window.location.href='..';
				</script>";
	}
}