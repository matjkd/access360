<?php

class Contact extends MY_Controller {

function __construct()
	{
		parent::__construct();


                $this->load->model('content_model');


	}

        function index()
        {
                $data['main_content'] = "content/contact";
                $data['latest_news'] = $this->content_model->latest_news();
		$data['breadcrumb'] = "contact";
		$this->load->vars($data);
		$this->load->view('template');
        }


}