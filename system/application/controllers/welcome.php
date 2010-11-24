<?php

class Welcome extends MY_Controller {

function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['main_content'] = "content/main";
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */