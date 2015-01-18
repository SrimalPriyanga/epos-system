<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$adminsessiondata = array(
			'logged_in' => FALSE,
		);
                
		if ($this->session->userdata('login_attempt') == FALSE) {
			$this->session->set_userdata('login_attempt', 0);
		}
                
		$this->session->set_userdata($adminsessiondata);
		$data = array(
			"title" => "BOI - Administrator",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$this->load->view('vLogin', $data);
	}

	public function login_check(){
		$user['username'] = $this->input->post('username');
                //Hashed Password
		$user['password'] = hash('sha512', $this->input->post('password'));
                //Non Hashed Password if needed
		$user['password_not_hashed'] = $this->input->post('password');
                
		$query = $this->db->query('
			SELECT username, password FROM users WHERE user_id =1
		');
		$results = $query->result_array();

		if (($user['username'] === $results[0]['username']) && ($user['password'] === $results[0]['password'])) {
                    //Successful Login
                    $this->session->set_userdata('logged_in', TRUE);
                    $this->session->set_userdata('user_data', $results[0]['username']);
                    redirect('home');
		}else { //Invalid Login
                    $attempt = $this->session->userdata('login_attempt');
                    $this->session->set_userdata('login_attempt', ++$attempt);
                    $this->session->set_userdata('logged_in', FALSE);
                    $this->session->set_userdata('user_data', $user['username']);
                    
                    //If 3 Invalid Logins
                    if ($this->session->userdata('login_attempt') >= 3) {
                        //Prepairing the email to report Invalid login
                        $config = Array(
                                'protocol' => 'smtp',
                                'smtp_host' => 'ssl://smtp.googlemail.com',
                                'smtp_port' => 465,
                                'smtp_user' => '',
                                'smtp_pass' => '',
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

                        //Send the email
                        $result = $this->email->send();

                        //If any error occured
                        //echo $this->email->print_debugger();
                        
                        redirect('');
                    }
                    redirect('');
		}
	}

	public function user_config(){ //Change Password
            $this->load->model('m_login');

            $user['password'] = $this->input->post('user-password');
            $user['password-conf'] = $this->input->post('user-password-conf');
            if ($user['password'] != $user['password-conf']) redirect("/home"); // User password validation by back-end

            $user['password_not_hashed']=$user['password'] ;
            $user['password'] = hash('sha512',$user['password']);
            $status = $this->m_login->set_user($user);
            if ($status == TRUE) {
                redirect("");
            }else{ //var_dump($status);
                redirect("");
            }
	}

	public function perform_logout(){ //Logout
            $this->session->sess_destroy();
            redirect('');
	}

}
/* End of class login.php */