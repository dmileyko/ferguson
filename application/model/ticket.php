<?php

class Ticket
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
    		$search .= ' and ticket_status_id=' . $ticket_status_id;

        return $this->db->get_results("SELECT * FROM ticket where 1=1 $search order by date_created");   
    }
}