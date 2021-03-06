<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['login'])){
        	redirect('Authentication');
        }
    }
	public function index()
	{
		$dataLoad['active'] = $this->fetch_active_user_count();
		$dataLoad['users'] = $this->fetch_user_count();
		$dataLoad['faq'] = $this->fetch_faq_count();
		$dataLoad['books'] = $this->fetch_books_count();
		$dataLoad['available_books'] = $this->fetch_available_books_count();
		$dataLoad['orders'] = $this->fetch_orders_count();
		$dataLoad['books_sold'] = $this->fetch_books_sold_count();
		$dataLoad['header'] = 'Dashboard';
		$dataLoad['sidebar'] = 'Dashboard';
		$this->load->view('Dashboard/dashboard',$dataLoad);
	}
	public function fetch_books_count(){
		$this->load->model('Fetch_Count');
		return $this->Fetch_Count->fetch_books_count();
	}
	public function fetch_available_books_count(){
		$this->load->model('Fetch_Count');
		return $this->Fetch_Count->fetch_available_books_count();
	}
	public function fetch_user_count(){
		$this->load->model('Fetch_Count');
		return $this->Fetch_Count->fetch_user_count();
	}
	public function fetch_active_user_count(){
		$this->load->model('Fetch_Count');
		$active = $this->Fetch_Count->fetch_user_count();
		$all = $this->Fetch_Count->fetch_all_user_count();
		return number_format((float)(($active/$all)*100), 2, '.', '');
	}
	public function fetch_faq_count(){
		$this->load->model('Fetch_Count');
		return $this->Fetch_Count->fetch_faq_count();
	}
	public function fetch_orders_count(){
		$this->load->model('Fetch_Count');
		return $this->Fetch_Count->fetch_orders_count();
	}
	public function fetch_books_sold_count(){
		$this->load->model('Fetch_Count');
		return $this->Fetch_Count->fetch_books_sold_count();	
	}
}
