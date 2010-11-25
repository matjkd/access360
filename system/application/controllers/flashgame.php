<?php

class Flashgame extends MY_Controller {

function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['main_content'] = "flash/turkey";
		$this->load->vars($data);
		$this->load->view('template');
	}
	function submitscore()
	{
		$data['errors'] = validation_errors();
		$data['score'] = $this->input->post('time');
		$data['main_content'] = "flash/turkeyscore";
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file flashgame.php */
/* Location: ./system/application/controllers/flashgame.php */