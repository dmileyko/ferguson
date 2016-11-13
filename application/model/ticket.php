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
    public function get_by_combination($employee_id)
    {
    	if ($employee_id > 0)
    		$search .= ' and employe_id=' . 
        return $this->db->get_single("SELECT * FROM ticket where email='" . $username . "'");   
    }
}