<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "BOI -Admin home",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$this->load->view('vheader',$data);
		$this->load->view('vProducts');
		$this->load->view('vfooter');
	}

}
/* End of class home.php */