<?php

class Admin_model extends Model {

	 function __construct()
    {
        parent::__construct();
      
    }
	function get_admin($id)
	{
			
		$this->db->where('admin_id', $id);
		$query = $this->db->get('admin');
		if($query->num_rows == 1);
			{
				return $query->result();
			}
		
	}
}