<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Receipt extends CI_Controller {

	public function index(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            $this->load->model('m_receipt');
            $data = array(
                    "title" => "BOI - Admin Receipt",
                    "mDescription" => "",
                    "mKeywords" => ""
            );
            
            $product_list['categories'] = $this->get_categories();

            $this->load->view('vHeader', $data);
            $this->load->view('vReceipt', $product_list);
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
        
        public function load_products($cat_id,$number){	
            //if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            if($cat_id!=NULL){ //If any category selected
                //Retrieve Pructs according to the category
		$products= $this->m_products->retrieve_products_by_category($cat_id);
                
                //Encode the already selected products array
                if(isset($_POST['selected_products_array'])){
                    $selected_products_array=json_decode($_POST['selected_products_array']);
                }
                
                //Generate the html code for Products List
                echo'
                <select name="product_'.$number.'_id" id="product_'.$number.'_id" class="form-control" onchange="enable_quantity('.$number.');">
                    <option selected="selected" value="-">Select a product ...</option>';
                    foreach ($products as $row){
                        for($i=1;$i<11;$i++){ //Check with the already selected products
                            if(!empty($selected_products_array)){ //If atleast one Product is already selected
                                if($row['product_id']===$selected_products_array[$i]){ //If a selected prdouct and the current product match
                                    $disablility='style="display:none;"';
                                    break;
                                }else{ //Not Match
                                    $disablility='';
                                }
                            }else{ //If atleast one Product is not already selected
                                break;
                            }
                        }
                    //Add the Product and details as an option    
                    echo '<option value="'.$row['product_id'].'" '.$disablility.'>'.$row['name'].'</option>';
                    }
                echo '</select>';
            }else{ //If any category is not selected
                echo'
                <select name="product_'.$number.'_id" id="product_'.$number.'_id" class="form-control" onchange="enable_quantity('.$number.');">
                    <option selected="selected" value="-">Select a product ...</option>';
                echo '</select>';
            }
	}
        
        
        
	public function generate(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            $this->load->model('m_receipt');
            $data = array(
                    "title" => "BOI -Admin home",
                    "mDescription" => "",
                    "mKeywords" => ""
            );
            //Prepare Basic Receipt Details
            $receipt_data['date'] = $this->input->post('date');
            $receipt_data['customer_name'] = $this->input->post('customer_name');
            $receipt_data['address'] = $this->input->post('address');
            $receipt_data['discount'] = $this->input->post('discount');
            $receipt_data['tax'] = $this->input->post('tax');

            $receipt_data['total']=0;
            for ($i=1; $i < 11; $i++) { //Generating the Selected Product List and the related detaisl
                if (($this->input->post('product_'.$i.'_id') != "-") && ($this->input->post('product_'.$i.'_que') != '')){
                        $receipt_list['product_'.$i.'_id'] = $this->input->post('product_'.$i.'_id');
                        $receipt_list['product_'.$i.'_que'] = $this->input->post('product_'.$i.'_que');
                        $receipt_list['product_'.$i.'_unit_price']=  $this->m_receipt->get_unit_price($receipt_list['product_'.$i.'_id']);
                        $receipt_list['product_'.$i.'_unit_price']=  number_format($receipt_list['product_'.$i.'_unit_price'], 2,'.','');
                        $receipt_list['product_'.$i.'_name']=  $this->m_receipt->get_name($receipt_list['product_'.$i.'_id']);
                        $receipt_list['product_'.$i.'_total']=$receipt_list['product_'.$i.'_que']*$receipt_list['product_'.$i.'_unit_price'];
                        $receipt_list['product_'.$i.'_total']=number_format($receipt_list['product_'.$i.'_total'], 2,'.','');
                        $receipt_data['sub_total']=$receipt_data['total']+$receipt_list['product_'.$i.'_total'];
                        $receipt_data['sub_total']=number_format($receipt_data['sub_total'], 2,'.','');
                        $receipt_items[$i]=$receipt_list;
                }
            }
                
            //Do the calculations for the receipt details
            $receipt_data['tax_amount']=$receipt_data['sub_total']*($receipt_data['tax']/100);
            $receipt_data['tax_amount']=number_format($receipt_data['tax_amount'], 2,'.', ',');
            $receipt_data['tax_reduced_total']=$receipt_data['sub_total']-$receipt_data['tax_amount'];
            $receipt_data['tax_reduced_total']=number_format($receipt_data['tax_reduced_total'], 2,'.', ',');
            $receipt_data['total']=$receipt_data['sub_total']-$receipt_data['discount'];
            $receipt_data['total']=number_format($receipt_data['total'], 2,'.','');

            if(isset($receipt_list)){
                $receipt_id = $this->m_receipt->set_receipt($receipt_data, $receipt_list);
                if (!$receipt_id == FALSE) {
                    $receipt_data['receipt_id']=$receipt_id['MAX(receipt_id)'];
                }else {
                    redirect(base_url().'receipt');
                }
            }else{ 
                redirect(base_url().'receipt');            
            }
        
            $receipt_data['receipt_list']=$receipt_items;
            
            $this->load->view('vHeader', $data);
            $this->load->view('vReceipt_view', $receipt_data);
            $this->load->view('vFooter');
	}

}
/* End of class home.php */