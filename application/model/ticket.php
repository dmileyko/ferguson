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
	    
	    public function update_ticket($ticket, $ticket_id)
	    {
	    	$this->db->db_perform('ticket', $ticket, 'update', "ticket_id = $ticket_id");
	    }
	    
	    public function add_ticket($ticket) {
	    	$this->db->db_perform('ticket', $ticket);	
	    }
	    
	    public function get_levels()
	    {
	    	return $this->db->get_results('select * from level');
	    }
	    
		public function get_ticket_statuses()
	    {
	    	return $this->db->get_results('select * from ticket_status');
	    }
	    
	    public function get_by_combination($employee_id, $ticket_status_id)
	    {
	    	$search = '';
	    	$orderby = 'order by ticket.date_created desc';
	    	if ($employee_id > 0) { 
	    		$search .= ' and ticket.employee_id=' . $employee_id;
	    		$orderby = 'order by ticket.estimated_arrival';
	    	}
	        if ($ticket_status_id > 0)
	    		$search .= ' and ticket.ticket_status_id=' . $ticket_status_id;
		  	        	
	        return $this->db->get_results("
	        	SELECT ticket.*, ticket_status.name as status_name, level.name as level_name, CONCAT(employee.firstname, ' ', employee.lastname) as employee_name 
	        	FROM ticket
	        	LEFT JOIN employee ON employee.employee_id = ticket.employee_id   
	        	LEFT JOIN ticket_status ON ticket_status.ticket_status_id = ticket.ticket_status_id
	        	LEFT JOIN level ON level.level_id = ticket.level_id        	
	        	where 1=1 $search $orderby
	        ");   
	    }
	    
		public function get_by_id($ticket_id)
	    {
	    	return $this->db->get_single("
	        	SELECT ticket.*, ticket_status.name as status_name, level.name as level_name, CONCAT(employee.firstname, ' ', employee.lastname) as employee_name
	        	FROM ticket
	        	LEFT JOIN employee ON employee.employee_id = ticket.employee_id    
	        	LEFT JOIN ticket_status ON ticket_status.ticket_status_id = ticket.ticket_status_id
	        	LEFT JOIN level ON level.level_id = ticket.level_id        	
	        	where ticket_id=$ticket_id
	        ");    	
	    }
	    
	    public function delete_ticket($ticket_id)
	    {
	    	$this->db->Execute('delete from ticket where ticket_id=' . $ticket_id);	    
	    }
	}
}