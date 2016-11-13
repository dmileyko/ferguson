<?php
class Controller
{
    /**
     * @var null Database Connection
     */
    public $db = null;
    public $current_user = null;
    /**
     * @var null Model
     */
    public $model = null;
    /**
     * Whenever controller is created, open a database connection too and load "the model".
     */
    function __construct()
    {
        $this->openDatabaseConnection();
        $this->loadModel();
        session_start();
        $this->current_user = $_SESSION['current_user'];
    }
    /**
     * Open the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {
        // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
        // "objects", which means all results will be objects, like this: $result->user_name !
        // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
        // @see http://www.php.net/manual/en/pdostatement.fetch.php
        //$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        // generate a database connection, using the PDO connector
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        //$this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
        
        
        $this->db = new queryFactory();
        $this->db->connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT, false, false);
        
    }
    /**
     * Loads the "model".
     * @return object model
     */

    public function loadModel($name = '')
    {
        /*$modelpath = 'model/'.$name.'_model.php';
		if(file_exists($modelpath)){
			require $modelpath;
			$modelName = ucwords($name).'_Model';
			$this->_model = new $modelName();
		}*/

        if ($name == '' ) {
            require APP . 'model/model.php';
            // create new "model" (and pass the database connection)
            $this->model = new Model($this->db);
        } else {
            if(file_exists(APP . 'model/' . strtolower($name) . '.php')){
                require APP . 'model/' . strtolower($name) . '.php';
                return new $name($this->db);
            }
        }
    }
}