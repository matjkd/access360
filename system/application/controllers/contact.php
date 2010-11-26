<?php

class Contact extends MY_Controller {

function __construct()
	{
		parent::__construct();


                $this->load->model('content_model');


	}

        function index()
        {
            $data['errors'] = validation_errors();

            $data['full_name'] = '';
            $data['email_address'] = '';
            $data['message'] = '';

            $data['main_content'] = "content/contact";
                $data['latest_news'] = $this->content_model->latest_news();
		$data['breadcrumb'] = "contact";
		$this->load->vars($data);
		$this->load->view('template');
        }
        function form()
        {
        	$this->form_validation->set_rules('email_address', 'email address', 'trim|required');
			$this->form_validation->set_rules('full_name', 'full name', 'trim|required');
			$this->form_validation->set_rules('message', 'message', 'trim|required');
		
			$data['email_address'] = $this->input->post('email_address');
    		$data['request_info'] = $this->input->post('request_info');
    		$data['message'] = $this->input->post('message');
    		$data['full_name'] = $this->input->post('full_name');
        	
        	$data['errors'] = validation_errors();

            $data['full_name'] = '';
            $data['email_address'] = '';
            $data['message'] = '';

            $data['main_content'] = "content/contact_response";
                $data['latest_news'] = $this->content_model->latest_news();
			$data['breadcrumb'] = "contact";
			$this->load->vars($data);
			$this->load->view('template');
        }


}