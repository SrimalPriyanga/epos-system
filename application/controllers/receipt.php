<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Receipt extends CI_Controller {

	public function index(){	if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
		$this->load->model('m_receipt');
		$data = array(
			"title" => "BOI -Admin home",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$product_list['content'] = $this->get_products();

		$this->load->view('vHeader', $data);
		$this->load->view('vReceipt', $product_list);
		$this->load->view('vFooter');
	}

	public function get_products(){	if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
		return $this->m_products->retrieve_products();
	}

	public function generate(){	if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
		$this->load->model('m_receipt');
		$receipt_data['date'] = $this->input->post('date');
		$receipt_data['customer_name'] = $this->input->post('customer_name');
		$receipt_data['address'] = $this->input->post('address');
		$receipt_data['discount'] = $this->input->post('discount');
		$receipt_data['tax'] = $this->input->post('tax');
		for ($i=1; $i < 11; $i++) {
			if (($this->input->post('product_'.$i.'_id') != "Select a product ...") && ($this->input->post('product_'.$i.'_que') != '')){
				$receipt_list['product_'.$i.'_id'] = $this->input->post('product_'.$i.'_id');
				$receipt_list['product_'.$i.'_que'] = $this->input->post('product_'.$i.'_que');
			}
		}
		
		if (isset($receipt_list)) {
			$status = $this->m_receipt->set_receipt($receipt_data, $receipt_list);
			if ($status == TRUE) {
			redirect('/receipt');
			}else redirect('');
		}else redirect('');
	}

}
/* End of class home.php */