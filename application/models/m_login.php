<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

function __construct()
	{
		parent::__construct();
	}

	function set_user($user){
		$query = $this->db->query('
			UPDATE users SET password="'.$user['password'].'", password_not_hashed="'.$user['password_not_hashed'].'"
			WHERE user_id = 1;
		');
		return $query;
	}

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */