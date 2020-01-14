<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['login'])){
        	redirect('Authentication');
        }
    }
	public function index()
	{
		redirect('Admin/dashboard');
	}
	public function dashboard(){
		redirect('Dashboard');
	}
	public function all_users(){
		redirect('Users');
	}
	public function all_orders(){
		redirect('Orders/all_orders');
	}
	public function bmb_wallet(){
		redirect('Wallet');
	}
	public function refer_n_earn(){
		$dataLoad['header'] ='Refer & Earn';
		$dataLoad['refers'] = $this->fertch_refer_n_earn();
		$dataLoad['sidebar'] = 'Refer';
		$this->load->view('Refer/refer',$dataLoad);
	}
	public function add_new_faq(){
		redirect('FAQ/add_faq');
	}
	public function all_faq(){
		redirect('FAQ/all_faq');
	}
	public function add_new_category(){
		redirect('Books/category');
	}
	public function add_new_book(){
		redirect('Books/new_book');
	}
	public function add_multiple_book(){
		redirect('Books/add_multiple_book');
	}
	public function all_books(){
		redirect('Books/all_books');
	}
	public function books_not_found(){
		redirect('Books/books_not_found');
	}
	// public function bills(){
	// 	$dataLoad['header'] ='Bills';
	// 	$dataLoad['sidebar'] = 'Receipts';
	// 	$this->load->view('Reciepts/bills',$dataLoad);
	// }
	// public function reports(){
	// 	$dataLoad['header'] ='Reports';
	// 	$dataLoad['sidebar'] = 'Receipts';
	// 	$this->load->view('Reciepts/reports',$dataLoad);
	// }
	public function feedbacks(){
		redirect('Feedbacks');
	}
	public function logout(){
		$sessionData = array('userId', 'login');
		$this->session->unset_userdata($sessionData);
		redirect('Authentication');
	}
	public function fertch_refer_n_earn(){
		$this->load->model('Fetch');
		return $this->Fetch->fetch_refer_n_earn();
	}
}
