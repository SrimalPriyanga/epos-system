<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_products extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function retrieve_products(){
    	$query = $this->db->query('
    		SELECT * FROM products
    		');
    	return $query->result_array();
    }

    function insert_product($product_details){
    	$query = $this->db->query('
    		INSERT INTO products(name, description, price) VALUES("'.$product_details['name'].'", "'.$product_details['description'].'", '.$product_details['price'].')
    		');
    	return $query;
    }

    function update_product($product_details){
    	$query = $this->db->query('
    		UPDATE products SET name="'.$product_details['new_name'].'", description="'.$product_details['new_description'].'", price='.$product_details['new_price'].'
    		WHERE product_id = '.$product_details['selected_product'].'
    		');
    	return $query;
    }
    function delete_product($product_details){
    	$query = $this->db->query('
    		DELETE FROM products WHERE product_id = '.$product_details['selected_product'].'
    		');
    	return $query;
    }
}