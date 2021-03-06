<?php

class Flashgame extends MY_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('game_model');
                $this->load->model('content_model');
               
                
	}
	
	function index()
	{
		$data['main_content'] = "flash/turkey";
		$data['latest_news'] = $this->content_model->latest_news();
                $data['breadcrumb'] = "flashgame";
                $data['top_ten'] = $this->game_model->turkey_scores();
                $data['sidebar1'] = "flash/scoreboard";
                $this->load->vars($data);
		$this->load->view('template');

	}
	function submitscore()
	{
		$data['errors'] = validation_errors();
		$data['score'] = $this->input->post('time');
		if($data['score'] > 4)
		{
			$data['response'] = "A terrible";
		}
		if($data['score'] > 3 && $data['score'] <= 4)
		{
			$data['response'] = "A not so great";
		}
		if($data['score'] > 2 && $data['score'] <= 3)
		{
			$data['response'] = "An alright";
		}
		if($data['score'] > 1 && $data['score'] <= 2)
		{
			$data['response'] = "A pretty good";
		}
		if($data['score'] <= 1)
		{
			$data['response'] = "A superb";
		}
		$data['email_address'] ='';
    	$data['initials'] ='';
    	$data['full_name'] ='';
	$data['latest_news'] = $this->content_model->latest_news();
    	$data['main_content'] = "flash/turkeyscore";
        $data['top_ten'] = $this->game_model->turkey_scores();
		$this->load->vars($data);
		$this->load->view('template');
	}
	function submit_turkey() 
	{
		$this->form_validation->set_rules('email_address', 'email address', 'trim|required');
		$this->form_validation->set_rules('full_name', 'full name', 'trim|required');
		$this->form_validation->set_rules('time', 'time', 'trim|required');
		$this->form_validation->set_rules('initials', 'initials', 'trim|required');
		
	
    	$data['email_address'] = $this->input->post('email_address');
    	$data['request_info'] = $this->input->post('request_info');
    	$data['score'] = $this->input->post('time');
    	$data['initials'] = $this->input->post('initials');
		$data['response'] = "";
    	$data['full_name'] =$this->input->post('full_name');;
		
    	$data['latest_news'] = $this->content_model->latest_news();
    	if($this->form_validation->run() == FALSE)
				{
					
					
					
					$data['errors'] = validation_errors();
				
					$data['main_content'] = 'flash/turkeyscore';
					$this->load->vars($data);
					$this->load->view('template');
					
				}
				else
				{
					
					$this->game_model->submit_score();
					
					redirect('/flashgame/scoreboard');
				}
		
	}
	function scoreboard()
	{
		$data['top_ten'] = $this->game_model->turkey_scores();
		$data['main_content'] = "flash/scoreboard";
                $data['latest_news'] = $this->content_model->latest_news();
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file flashgame.php */
/* Location: ./system/application/controllers/flashgame.php */