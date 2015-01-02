<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_reporting extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    
    function get_report_data($start_date,$end_date){
        $query = $this->db->query("
            SELECT * from daily_transactions
            where DATE(date) BETWEEN '".$start_date."' AND '".$end_date."'
            order by transaction_id asc");
        
    	return $query->result_array();
    }
}