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
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/admin.php';
        require APP . 'view/_templates/footer.php';
    }
}