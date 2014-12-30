<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		//var_dump($this->session->all_userdata());
		$adminsessiondata = array(
			'logged_in' => FALSE
		);
		$this->session->set_userdata($adminsessiondata);
		$data = array(
			"title" => "BOI-Administrator",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$this->load->view('vLogin', $data);
	}

	public function login_check(){
		$user['username'] = $this->input->post('username');
		$user['password'] = $this->input->post('password');
		$query = $this->db->query('
			SELECT username, password FROM users WHERE user_id =1
		');
		$results = $query->result_array();

		if (($user['username'] === $results[0]['username']) && ($user['password'] === $results[0]['password'])) {
			$this->session->set_userdata('logged_in', TRUE);
			$this->session->set_userdata('user_data', $results[0]['username']);
			redirect('home');
		}else {
			$this->session->set_userdata('logged_in', FALSE);
			$this->session->set_userdata('user_data', $user['username']);
			redirect('');
		}
	}

	public function perform_logout(){
		$this->session->sess_destroy();
		redirect('');
	}

}
/* End of class login.php */