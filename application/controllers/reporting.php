<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reporting extends CI_Controller {

	public function index(){	
            if ($this->session->userdata('logged_in') != TRUE) redirect(base_url()); //Check login status
		$data = array(
			"title" => "BOI - Admin home",
			"mDescription" => "",
			"mKeywords" => ""
		);
		$this->load->view('vHeader',$data);
		$this->load->view('vReporting');
		$this->load->view('vFooter');
	}
	
        public function generate_graph(){	
            $data['start_date'] = $this->input->post('start_date');
            $data['start_date'] = date('Y-m-d', strtotime($data['start_date']));
            
            $data['end_date'] = $this->input->post('end_date');
            $data['end_date'] = date('Y-m-d', strtotime($data['end_date']));
            
            $data['cb'] = $this->input->post('cb');
            $data['cheque'] = $this->input->post('cheque');
            $data['tr'] = $this->input->post('tr');
            $data['especes'] = $this->input->post('especes');
            
            $this->load->model('m_reporting');
            $data['graph_data']=$this->m_reporting->get_report_data($data['start_date'],$data['end_date']);
            
            $this->load->view('vGraph',$data);
	}

}
/* End of class home.php */