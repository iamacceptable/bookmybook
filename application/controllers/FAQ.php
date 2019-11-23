<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['login'])){
        	redirect('Authentication');
        }
    }
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
		$this->load->model('Update');
		$this->Update->delete_faq($id);
		redirect('FAQ/all_faq');
	}
	public function add_faq(){
		$dataLoad['header'] ='Add New FAQ';
		$dataLoad['sidebar'] = 'FAQ';
		$this->load->view('FAQ/add_new',$dataLoad);
	}
	public function add_new_faq(){
		$this->form_validation->set_rules('faqq','Question','required');
		$this->form_validation->set_rules('faqa','Answer','required');
		if($this->form_validation->run() == FALSE){
			$this->add_faq();		
		}
		else{
			$dataPost = array(
				'ques' => $this->input->post('faqq'),
				'ans' => $this->input->post('faqa')
			);
			$this->load->model('Upload_Data');
			$this->Upload_Data->add_new_faq($dataPost);
			echo "<script>
					alert('New Frequently Asked Question Added Successfully!!!');
					window.location.href='all_faq';
				</script>";
		}
	}
}