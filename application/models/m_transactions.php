<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_transactions extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    
    function retrieve_order_details(){
        $query = $this->db->query('
            SELECT rc.receipt_id, rc.customer_name, rc.address, rc.discount, rc.tax, rc.total, pr.name, hs.quantity, hs.sub_total
            FROM receipt_has_products as hs
            INNER JOIN products as pr on pr.product_id = hs.product_id
            INNER JOIN receipt as rc on rc.receipt_id = hs.receipt_id
            WHERE rc.date="'.date('Y-m-d').'"
            ORDER BY rc.receipt_id;
        '); 
        return $query->result_array();
    }

    function retrieve_transaction_details(){
        $query = $this->db->query("
            SELECT * FROM daily_transactions order by date desc limit 30
        ");
        return $query->result_array();
    }

    function insert($transactions){
        $query =$this->db->query('
            INSERT INTO daily_transactions(date, cb, cheque, tr, especes, total, defences, bank, safe, balance, inhand) 
            VALUES("'.$transactions['date'].'", '.$transactions['cb'].', '.$transactions['cheque'].', '.$transactions['tr'].', '.$transactions['especes'].', '.$transactions['total'].', '.$transactions['defences'].', '.$transactions['bank'].', '.$transactions['safe'].', '.$transactions['balance'].', '.$transactions['inhand'].')
        ');
        return $query;
    }

    function update($transactions){
    	$query = $this->db->query('
    		UPDATE daily_transactions SET 
                date="'.$transactions['date'].'",
                cb='.$transactions['cb'].', 
                cheque='.$transactions['cheque'].', 
                tr='.$transactions['tr'].', 
                especes='.$transactions['especes'].', 
                defences='.$transactions['defences'].', 
                total='.$transactions['total'].', 
                balance='.$transactions['balance'].', 
                bank='.$transactions['bank'].', 
                safe='.$transactions['safe'].', 
                inhand='.$transactions['inhand'].' 
                    
    		WHERE transaction_id = '.$transactions['id'].'');
    	return $query;
    }
    
    function check_exist_dates($seldate) {
        $query = $this->db->query("SELECT date from daily_transactions where date='".$seldate."'");
        if($query->num_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}

/* End of file m_transactions.php */
/* Location: ./application/models/m_transactions.php */