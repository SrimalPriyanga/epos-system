<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data = array(
			"titile" => "",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$this->load->view('vlogin', $data);
	}

}
/* End of class login.php */