<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reporting extends CI_Controller {

	public function index(){	if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
		$data = array(
			"title" => "BOI -Admin home",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$this->load->view('vHeader',$data);
		$this->load->view('vReporting');
		$this->load->view('vFooter');
	}

}
/* End of class home.php */