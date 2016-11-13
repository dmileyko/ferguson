<?php

if (!class_exists('TicketModel')) {
  
	class TicketModel
	{
	    function __construct($db)
	    {
	        //try {
	            $this->db = $db;
	        //} catch (PDOException $e) {
	        //    exit('Database connection could not be established.');
	        //}
	    }
	
	    /**
	     * Get all songs from database
	     */ 
	    
	    public function get_by_combination($employee_id, $ticket_status_id)
	    {
	    	if ($employee_id > 0)
	    		$search .= ' and employee_id=' . $employee_id;
	        if ($ticket_status_id > 0)
	    		$search .= ' and ticket.ticket_status_id=' . $ticket_status_id;
	
	        return $this->db->get_results("
	        	SELECT ticket.*, ticket_status.name as status_name, level.name as level_name
	        	FROM ticket   
	        	LEFT JOIN ticket_status ON ticket_status.ticket_status_id = ticket.ticket_status_id
	        	LEFT JOIN level ON level.level_id = ticket.level_id        	
	        	where 1=1 $search order by ticket.date_created
	        ");   
	    }
	    
		public function get_by_id($ticket_id)
	    {
	    	return $this->db->get_single("
	        	SELECT ticket.*, ticket_status.name as status_name, level.name as level_name
	        	FROM ticket   
	        	LEFT JOIN ticket_status ON ticket_status.ticket_status_id = ticket.ticket_status_id
	        	LEFT JOIN level ON level.level_id = ticket.level_id        	
	        	where ticket_id=$ticket_id
	        ");   
	    }
	}
}