<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transactions extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "BOI -Admin home",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$this->load->view('vHeader',$data);
		$this->load->view('vTransactions');
		$this->load->view('vFooter');
	}

}
/* End of class home.php */