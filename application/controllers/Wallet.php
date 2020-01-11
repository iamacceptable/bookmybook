<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wallet extends CI_Controller {
	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['login'])){
        	redirect('Authentication');
        }
    }
	public function index(){
		redirect('Wallet/bmb_wallet');
	}
	public function bmb_wallet(){
		$dataLoad['wallets'] = $this->fetch_wallet_details();
		$dataLoad['header'] ='BMB Wallet';
		$dataLoad['sidebar'] = 'Wallet';
		$this->load->view('Wallet/wallet',$dataLoad);
	}
	public function fetch_wallet_details(){
		$this->load->model('Fetch');
		return $this->Fetch->fetch_wallet_details();
	}
	public function update_wallet($uid){
		$this->form_validation->set_rules('amount', 'Amount', 'required|numeric|greater_than[0]');
		if($this->form_validation->run() == False){
			echo "	<script>
					alert('".form_error('amount')."');
					window.location.href='..';
				</script>";
		}
		else
		{
			$walletAmount = $this->input->post('amount');
			$this->update_wallet_amount($uid,$walletAmount);
			echo "	<script>
					alert('".$walletAmount." Amount Added!!!');
					window.location.href='..';
				</script>";
		}
	}
	public function update_wallet_amount($userId, $walletAmount){
		$this->load->model('Update');
		$this->Update->update_wallet($userId, $walletAmount);
	}
}