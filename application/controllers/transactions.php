<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transactions extends CI_Controller {

	public function index(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            $data = array(
                    "title" => "BOI -Admin Transactions",
                    "mDescription" => "",
                    "mKeywords" => ""
            );
            //Retrieve Orders and details for today 
            $order_details = $this->get_order_details();
            if ($order_details == FALSE) { //If no orders have placed
                $order_details['availability'] = FALSE;
            }else{ //If at least one order is placed
                $order_details['availability'] = TRUE;
            }

            //Retrieve Transactions History 
            $order_details['data_of_transactions'] = $this->get_transaction_history();
            
            $this->load->view('vHeader',$data);
            $this->load->view('vTransactions', $order_details);
            $this->load->view('vFooter');
	}

	public function get_order_details(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            $this->load->model('m_transactions');
            $order_details['content'] = $this->m_transactions->retrieve_order_details();
            $order_details['number_of_records'] = count($order_details['content']);

            if ($order_details['content'] != null) {	// Check whether orders are available or not by date
                $order_details['num_of_orders'] = 1;	// To store number of receipt for day
                $temp_receipt_id = $order_details['content'][0]['receipt_id'];

                foreach ($order_details['content'] as $value) {		// Start to find number of receipt of day
                    if ($temp_receipt_id != $value['receipt_id']) {
                            $temp_receipt_id = $value['receipt_id'];
                            $order_details['num_of_orders']++;
                    }
                }
                return $order_details;
            }else {
                return FALSE;
            }
	}

	public function get_transaction_history(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            $this->load->model('m_transactions');
            $transaction_history = $this->m_transactions->retrieve_transaction_details();
            
            if ($transaction_history != null) {
                return $transaction_history;
            }else {
                return FALSE;
            }
	}

	public function insert(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            //Prepare Transaction details
            $this->load->model('m_transactions');
            $transaction['date'] = $this->input->post('date');
            $transaction['cb'] = $this->input->post('cb');
            $transaction['cheque'] = $this->input->post('cheque');
            $transaction['tr'] = $this->input->post('tr');
            $transaction['especes'] = $this->input->post('especes');
            $transaction['defences'] = $this->input->post('defences');
            $transaction['total'] = $transaction['cb'] + $transaction['cheque'] + $transaction['tr'] + $transaction['especes'];
            $transaction['balance'] = $transaction['especes'] - $transaction['defences'];
            $transaction['bank'] = ($transaction['balance'] /100) *25;
            $transaction['safe'] = ($transaction['balance'] /100) *75;
            $transaction['inhand'] = $transaction['balance'] - ($transaction['bank'] + $transaction['safe']);

            $status = $this->m_transactions->insert($transaction);
            if ($status == TRUE) {
                redirect('/transactions');
            }else{
                redirect('');
            }
	}
        
	public function update(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            $this->load->model('m_transactions');
            $transaction['id'] = $this->input->post('id');
            $transaction['date'] = $this->input->post('new_date');
            $transaction['cb'] = $this->input->post('new_cb');
            $transaction['cheque'] = $this->input->post('new_cheque');
            $transaction['tr'] = $this->input->post('new_tr');
            $transaction['especes'] = $this->input->post('new_especes');
            $transaction['defences'] = $this->input->post('new_defences');
            $transaction['total'] = $transaction['cb'] + $transaction['cheque'] + $transaction['tr'] + $transaction['especes'];
            $transaction['balance'] = $transaction['especes'] - $transaction['defences'];
            $transaction['bank'] = ($transaction['balance'] /100) *25;
            $transaction['safe'] = ($transaction['balance'] /100) *75;
            $transaction['inhand'] = $transaction['balance'] - ($transaction['bank'] + $transaction['safe']);

            $status = $this->m_transactions->update($transaction);
            if ($status == TRUE) {
                redirect('/transactions');
            }else {
                redirect('');            
            }
	}

	public function delete(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            
            $selected_id = $this->input->get(NULL, TRUE);
            if ($selected_id != FALSE) {
                $query = $this->db->query('
                        DELETE FROM daily_transactions WHERE transaction_id = '.$selected_id['id'].'
                ');
                redirect('/transactions');
            }else redirect('');
	}

        public function exist_dates($seldate) {
            $this->load->model('m_transactions');
            $status = $this->m_transactions->check_exist_dates($seldate);
            echo '<script>console.log('.$status.')</script>';
            if($status==TRUE){
                echo '<div class="alert alert-warning" role="alert">
                          <p class="text-center"><strong>The Date you selected is already exist. Please update it if you need.</strong></p>
                    </div>';
            }
            else{
                echo '<div class="alert alert-warning" role="alert">
                          <p class="text-center"><strong>The Date you selected is a past date but not already exist.</strong></p>
                    </div>';
                
            }
        }
        public function date_today() {
            
                echo '<div class="alert alert-warning" role="alert">
                          <p class="text-center"><strong>The Date you selected is today. Enter the details.</strong></p>
                    </div>';
        }
}
/* End of class transactions.php */