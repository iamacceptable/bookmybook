<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends CI_Controller {
	public function all_faq(){
		$dataLoad['faqs'] = $this->fetch_all_faq();
		$dataLoad['header'] ='FAQs';
		$dataLoad['sidebar'] = 'FAQ';
		$this->load->view('FAQ/all_list',$dataLoad);
	}
	public function fetch_all_faq(){
		$this->load->model('Fetch');
		return $this->Fetch->fetch_all_faq();
	}
	public function delete_faq($id){

	}
}