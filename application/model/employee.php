<?php

class EmployeeModel
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
    public function get_by_type($user_type_id)
    {
    	return $this->db->get_results('select * from employee where user_type_id = ' . $user_type_id . ' order by firstname');
    }
    
    public function get_by_username($username)
    {
        return $this->db->get_single("SELECT * FROM employee where email='" . $username . "'");   
    }
}