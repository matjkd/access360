<?php

class Content_model extends Model {

	 function __construct()
    {
        parent::__construct();
      
    }
	function get_content($title)
	{
			
		$this->db->where('menu', $title);
		$query = $this->db->get('content');
		if($query->num_rows == 1);
			{
				return $query->result();
			}
		
	}
	
	function get_all_news()
	{
			
		$this->db->where('content_type', 'news');
		$query = $this->db->get('content');
		if($query->num_rows > 0);
			{
				return $query->result();
			}
		
	}
	function get_news($id)
	{
			
		$this->db->where('content_id', $id);
		$query = $this->db->get('content');
		if($query->num_rows > 0);
			{
				return $query->result();
			}
		
	}
}