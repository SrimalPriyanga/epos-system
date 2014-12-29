<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "BOI -Admin home",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$product_list['content'] = $this->get_products();
		
		$this->load->view('vHeader', $data);
		$this->load->view('vProducts', $product_list);
		$this->load->view('vFooter');
	}

	public function get_products(){
		return $this->m_products->retrieve_products();
	}

	public function insert(){
		$product_details['name'] = $this->input->post('name');
		$product_details['description'] = $this->input->post('description');
		$product_details['price'] = $this->input->post('price');
		
		$status = $this->m_products->insert_product($product_details);
		if ($status == TRUE) {
			redirect('/products');
		}else
		redirect('');
	}

	public function update(){
		$product_details['selected_product'] = $this->input->post('selected_product');
		$product_details['new_name'] = $this->input->post('new_name');
		$product_details['new_description'] = $this->input->post('new_description');
		$product_details['new_price'] = $this->input->post('new_price');
		
		$status = $this->m_products->update_product($product_details);
		if ($status == TRUE) {
			redirect('/products');
		}else
		redirect('');
	}

	public function delete(){
		$product_details['selected_product'] = $this->input->post('selected_product');
		
		$status = $this->m_products->delete_product($product_details);
		if ($status == TRUE) {
			redirect('/products');
		}else
		redirect('');
	}

}
/* End of class home.php */