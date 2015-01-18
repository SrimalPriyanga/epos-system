<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            $data = array(
                    "title" => "BOI - Admin Products",
                    "mDescription" => "",
                    "mKeywords" => ""
            );
            
            //Retrieve Categories
            $product_list['categories'] = $this->get_categories();
            //Retrieve Products
            $product_list['content'] = $this->get_products();

            $this->load->view('vHeader', $data);
            $this->load->view('vProducts', $product_list);
            $this->load->view('vFooter');
	}

	public function get_products(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            return $this->m_products->retrieve_products();
	}

	public function get_categories(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            return $this->m_products->retrieve_categories();
	}

	public function insert(){ //Insert New Product	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            //Prepare Product Details
            $product_details['name'] = $this->input->post('name');
            $product_details['category'] = $this->input->post('category');
            $product_details['description'] = $this->input->post('description');
            $product_details['price'] = $this->input->post('price');

            //Perform Insertion
            $status = $this->m_products->insert_product($product_details);
            
            if ($status == TRUE) { //Success
                redirect('/products');
            }else{
                redirect('');
            }
	}

	public function update(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            //Prepare Product Details
            $product_details['selected_product'] = $this->input->post('selected_product');
            $product_details['new_name'] = $this->input->post('new_name');
            $product_details['category'] = $this->input->post('category');
            $product_details['new_description'] = $this->input->post('new_description');
            $product_details['new_price'] = $this->input->post('new_price');

            //Perform Update
            $status = $this->m_products->update_product($product_details);
            
            if ($status == TRUE) { //Success
                redirect('/products');
            }else{
                redirect('');
            }
	}

	public function delete(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            //Set Product to delete
            $product_details['selected_product'] = $this->input->get('selected_product');

            //Perform Deteltion
            $status = $this->m_products->delete_product($product_details);
            
            if ($status == TRUE) {
                redirect('/products');
            }else{
                redirect('');
            }
	}

}
/* End of class products.php */