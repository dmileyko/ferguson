<?php
/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Ticket extends Controller
{ 
    var $loginError;
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {  
    	$ticketModel = $this->loadModel('Ticket');
    	$levels = $ticketModel->get_levels();
    	$ticket_statuses = $ticketModel->get_ticket_statuses();
    	
    	$employeeModel = $this->loadModel('Employee');
    	$employees = $employeeModel->get_by_type(2);
    	
    	if (isset($_POST['submit'])) 
    	{
    		$arrival_hour = mysql_real_escape_string($_POST['arrival_hour']);
    		$arrival_min = mysql_real_escape_string($_POST['arrival_min']);
    		$arrival_am = mysql_real_escape_string($_POST['arrival_am']);
    	
    		$ticket = array(	
    			'customer' => mysql_real_escape_string($_POST['customer']),
    			'address' => mysql_real_escape_string($_POST['address']),
    			'description' => mysql_real_escape_string($_POST['description']),    		
    			'time_spent' => mysql_real_escape_string($_POST['time_spent']),
    			'level_id' => mysql_real_escape_string($_POST['level_id']),
    			'ticket_status_id' => mysql_real_escape_string($_POST['ticket_status_id']),
    			'employee_id' => mysql_real_escape_string($_POST['employee_id']),
    			'estimated_arrival' => date('Y-m-d H:i:s', mktime($arrival_am == 'a' ? $arrival_hour : $arrival_hour + 12, $arrival_min, 0))
    		);
    		
    		print_r($ticket);
    		//, date('m'), date('j'), date('Y')
    		
    		
    		$ticketModel->add_ticket($ticket);
    		
    		header('location: ' . URL . '/home');
    	}
    	    	    	
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/ticket/index.php';
        require APP . 'view/_templates/footer.php';
    }
    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function view($ticket_id)
    {      	
    	$ticketModel = $this->loadModel('Ticket');
    	$ticket = $ticketModel->get_by_id($ticket_id);
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/ticket/view.php';
        require APP . 'view/_templates/footer.php';
    }
    
	public function delete($ticket_id)
    {      	
    	$ticketModel = $this->loadModel('Ticket');
    	$ticket = $ticketModel->delete($ticket_id);
        header('location: ' . URL . '/home');
    }
}