<?php

class Game_model extends Model {

	 function __construct()
    {
        parent::__construct();
        $this->load->helper('date');
      
    }
    
    function submit_score()
    {
    	$score_data = array(
	    				
						'email_address' => $this->input->post('email_address'),
	    				'time' => $this->input->post('time'),
	    				'initials' => $this->input->post('initials'),
	    				'request_info' => $this->input->post('request_info'),
    					'full_name' => $this->input->post('full_name'),
	    				'date_added' => time()
	    				);
	  $insert = $this->db->insert('turkey', $score_data);
		return $insert;
    }
    
	function turkey_scores()
	{
			
	$this->db->limit(10);
	$this->db->order_by("time", "asc");
		$query = $this->db->get('turkey');
		if($query->num_rows == 1);
			{
				return $query->result();
			}
		
	}
}