<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_receipt extends CI_Model {
	function __construct(){
        parent::__construct();
    }
	
    function set_receipt($receipt_data, $receipt_list){
		$query1 = $this->db->query('
			INSERT INTO receipt(date, customer_name, address, discount, tax, total) VALUES("'.$receipt_data['date'].'", "'.$receipt_data['customer_name'].'", "'.$receipt_data['address'].'", '.$receipt_data['discount'].', '.$receipt_data['tax'].', '.$receipt_data['total'].')
			');
		if ($query1 == TRUE) { //If successfully Inserted
			$query2 = $this->db->query('SELECT MAX(receipt_id) from receipt');
			$id = $query2->result_array();
			for ($i=1; $i < 11; $i++) {
                            if (isset($receipt_list['product_'.$i.'_id']) && isset($receipt_list['product_'.$i.'_que'])) {
                                $query3 = $this->db->query('
                                        INSERT INTO receipt_has_products(receipt_id, product_id, quantity,sub_total) 
                                        VALUES('.$id[0]['MAX(receipt_id)'].', '.$receipt_list['product_'.$i.'_id'].', '.$receipt_list['product_'.$i.'_que'].', '.$receipt_list['product_'.$i.'_total'].')
                                ');
                            }
			}
			return $id[0];
		}else return FALSE;
	}
        
	function get_unit_price($prdocut_id) {
		$this->db->select('price');
		$this->db->where('product_id', $prdocut_id);

		$query = $this->db->get('products');
		$row=$results=$query->row();
		return $row->price;
	}
	function get_name($prdocut_id) {
		$this->db->select('name');
		$this->db->where('product_id', $prdocut_id);

		$query = $this->db->get('products');
		$row=$results=$query->row();
		return $row->name;
	}
}

/* End of file m_reciept.php */
/* Location: ./application/models/m_reciept.php */