<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reporting extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "BOI -Admin home",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$this->load->view('vheader',$data);
		$this->load->view('vReporting');
		$this->load->view('vfooter');
	}

}
/* End of class home.php */