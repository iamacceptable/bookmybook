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
}