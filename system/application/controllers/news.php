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
		$data['news_content'] = $this->content_model->get_all_news();
		$data['latest_news'] = $this->content_model->latest_news();
		$data['breadcrumb'] = "news";
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
		$data['main_content'] = "content/news_item";
		$data['content'] = $this->content_model->get_news($segment_active);
		$data['latest_news'] = $this->content_model->latest_news();
		$data['breadcrumb'] = "news";
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */