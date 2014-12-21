<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "BOI-Administrator",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$this->load->view('vLogin', $data);
	}

}
/* End of class login.php */