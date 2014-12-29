<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transactions extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "BOI -Admin home",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$order_details = $this->get_order_details();
		var_dump($order_details);
		$this->load->view('vHeader',$data);
		$this->load->view('vTransactions', $order_details);
		$this->load->view('vFooter');
	}

	public function get_order_details(){
		$this->load->model('m_transactions');
		$order_details['content'] = $this->m_transactions->retrieve_order_details();
		
		if (null != $order_details['content']) {	// Check whether orders are available or not by date
			$order_details['num_of_orders'] = 1;
			$temp_receipt_id = $order_details['content'][0]->receipt_id;
			foreach ($order_details['content'] as $value) {
				if ($temp_receipt_id != $value->receipt_id) {
					$order_details['num_of_orders']++;
				}
			}
			return $order_details;
		}else return FALSE;
	}

}
/* End of class home.php */