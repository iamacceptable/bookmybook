<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$dataLoad['header'] = 'Authentication';
		$this->load->view('Auth/auth',$dataLoad);
	}
	public function dashboard(){
		$dataLoad['header'] = 'Dashboard';
		$dataLoad['sidebar'] = 'Dashboard';
		$this->load->view('Dashboard/dashboard',$dataLoad);
	}
	public function add_new_user(){
		$dataLoad['header'] = 'Users | Add new User';
		$dataLoad['sidebar'] = 'Users';
		$this->load->view('Users/add_new',$dataLoad);
	}
	public function all_users(){
		$dataLoad['header'] = 'Users | All Users';
		$dataLoad['sidebar'] = 'Users';
		$this->load->view('Users/all_list',$dataLoad);
	}
	public function all_orders(){
		$dataLoad['header'] = 'Orders';
		$dataLoad['sidebar'] = 'Orders';
		$this->load->view('Orders/all_list',$dataLoad);
	}
	public function bmb_wallet(){
		$dataLoad['header'] ='BMB Wallet';
		$dataLoad['sidebar'] = 'Wallet';
		$this->load->view('Wallet/wallet',$dataLoad);
	}
	public function refer_n_earn(){
		$dataLoad['header'] ='Refer & Earn';
		$dataLoad['sidebar'] = 'Refer';
		$this->load->view('Refer/refer',$dataLoad);
	}
	public function add_new_faq(){
		$dataLoad['header'] ='Add New FAQ';
		$dataLoad['sidebar'] = 'FAQ';
		$this->load->view('FAQ/add_new',$dataLoad);
	}
	public function all_faq(){
		$dataLoad['header'] ='FAQs';
		$dataLoad['sidebar'] = 'FAQ';
		$this->load->view('FAQ/all_list',$dataLoad);
	}
	public function add_new_category(){
		$dataLoad['header'] ='Add New Category';
		$dataLoad['sidebar'] = 'Books';
		$this->load->view('Books/add_new_category',$dataLoad);
	}
	public function add_new_book(){
		$dataLoad['header'] ='Add New Book';
		$dataLoad['sidebar'] = 'Books';
		$this->load->view('Books/add_new_book',$dataLoad);
	}
	public function add_multiple_book(){
		$dataLoad['header'] ='Add Multiple Book';
		$dataLoad['sidebar'] = 'Books';
		$this->load->view('Books/add_multiple_book',$dataLoad);
	}
	public function all_books(){
		$dataLoad['header'] ='All Books';
		$dataLoad['sidebar'] = 'Books';
		$this->load->view('Books/all_list',$dataLoad);
	}
	public function books_not_found(){
		$dataLoad['header'] ='Filter Not found';
		$dataLoad['sidebar'] = 'Books';
		$this->load->view('Books/bnf',$dataLoad);
	}
	public function bills(){
		$dataLoad['header'] ='Bills';
		$dataLoad['sidebar'] = 'Receipts';
		$this->load->view('Reciepts/bills',$dataLoad);
	}
	public function reports(){
		$dataLoad['header'] ='Reports';
		$dataLoad['sidebar'] = 'Receipts';
		$this->load->view('Reciepts/reports',$dataLoad);
	}
	public function feedbacks(){
		$dataLoad['header'] ='Feedbacks';
		$dataLoad['sidebar'] = 'Feedbacks';
		$this->load->view('Feedbacks/feedbacks',$dataLoad);
	}

}