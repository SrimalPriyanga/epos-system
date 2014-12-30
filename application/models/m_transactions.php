<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_transactions extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    
    function retrieve_order_details(){
        $query = $this->db->query('
            SELECT rc.receipt_id, rc.customer_name, rc.address, rc.discount, rc.tax, pr.name, hs.quantity
            FROM receipt_has_products as hs
            INNER JOIN products as pr on pr.product_id = hs.product_id
            INNER JOIN receipt as rc on rc.receipt_id = hs.receipt_id
            WHERE rc.date="'.date('Y-m-d').'"
            ORDER BY rc.receipt_id;
        '); //'.date('Y-m-d').'
        return $query->result_array();
    }

    function retrieve_transaction_details(){
        $query = $this->db->query('
            SELECT * FROM daily_transactions
        ');
        return $query->result_array();
    }

    function insert($transactions){
        $query =$this->db->query('
            INSERT INTO daily_transactions(date, cb, cheque, tr, especes, total, defences, bank, safe, balance, inhand) 
            VALUES("'.$transactions['date'].'", '.$transactions['cb'].', '.$transactions['cheque'].', '.$transactions['tr'].', '.$transactions['especes'].', '.$transactions['total'].', '.$transactions['defences'].', '.$transactions['bank'].', '.$transactions['safe'].', '.$transactions['balance'].', '.$transactions['inhand'].')
        ');
        return $query;
    }

}

/* End of file m_transactions.php */
/* Location: ./application/models/m_transactions.php */