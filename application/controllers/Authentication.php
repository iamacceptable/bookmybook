<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(isset($_SESSION['login'])){
        	redirect('Admin');
        }
    }
	public function index(){
		$dataLoad['header'] = 'Authentication';
		$this->load->view('Auth/auth',$dataLoad);
	}
	public function auth(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[12]|min_length[8]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$this->load->model('Fetch');
			$result = $this->Fetch->auth($user, md5($pass));
			if($result != FALSE){
				$sessionData = array(
					'userId' => $result[0]['id'],
					'login' => 'true'
				);
				$this->session->set_userdata($sessionData);
				redirect('Admin');
			}
			else{
				echo "<script>
					alert('Invalid Username and Password!!!');
					window.location.href='';
					</script>";
			}
		}
	}
}