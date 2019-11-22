<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
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
}