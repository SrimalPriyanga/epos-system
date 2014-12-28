<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Boi_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function insert_product($product_details){
    	$query = $this->db->query('
    		INSERT INTO products(name, description, price) VALUES("'.$product_details['name'].'", "'.$product_details['description'].'", '.$product_details['price'].')
    		');
    	return $query;
    }

    function retrieve_products(){
    	$query = $this->db->query('
    		SELECT * FROM products
    		');
    	return $query->result_array();
    	//var_dump($query->result_array());
    }
}

?>