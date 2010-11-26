<?php

class News extends MY_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('content_model');
	}
	
	function index()
	{
		redirect('news/main');
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
		$data['main_content'] = "content/news";
		$data['content'] = $this->content_model->get_all_news();
		$this->load->vars($data);
		$this->load->view('template');
	}
	function viewitem()
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
		$data['main_content'] = "content/news";
		$data['content'] = $this->content_model->get_news($segment_active);
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */