<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		//var_dump($this->session->all_userdata());
		$adminsessiondata = array(
			'logged_in' => FALSE,
		);
		if ($this->session->userdata('login_attempt') == FALSE) {
			$this->session->set_userdata('login_attempt', 0);
		}
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
			$attempt = $this->session->userdata('login_attempt');
			$this->session->set_userdata('login_attempt', ++$attempt);
			$this->session->set_userdata('logged_in', FALSE);
			$this->session->set_userdata('user_data', $user['username']);
			if ($this->session->userdata('login_attempt') >= 3) {
				
				echo "okkkk";
				
				$config = Array(
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_port' => 465,
					'smtp_user' => 's.priyanga22@gmail.com',
					'smtp_pass' => '$P1r9i9y1a',
					'mailtype'  => 'html', 
					'charset'   => 'iso-8859-1'
					);
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");

				$this->email->from('your@example.com', 'Your Name');
				$this->email->to('s.priyanga22@gmail.com'); 
				$this->email->cc('another@another-example.com'); 
				$this->email->bcc('them@their-example.com'); 

				$this->email->subject('Email Test');
				$this->email->message('Testing the email class.');	

				$result = $this->email->send();

				var_dump($result);
				echo $this->email->print_debugger();
				//redirect('');
			}
			//redirect('');
		}
	}

	public function perform_logout(){
		$this->session->sess_destroy();
		redirect('');
	}

}
/* End of class login.php */