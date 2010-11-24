<?php

class Welcome extends MY_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('content_model');
	}
	
	function index()
	{
		redirect('welcome/main');
	}
	
	function main()
	{
		$segment_active = $this->uri->segment(3);
		if ($segment_active!=NULL)
			{
				$data['menu'] = $this->uri->segment(3);
			}
		else
			{
				$data['menu'] = 'home';	
			}
		$data['main_content'] = "content/main";
		$data['content'] = $this->content_model->get_content($data['menu']);
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */