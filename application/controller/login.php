<?php
/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Login extends Controller
{
    var $loginError;
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        if (isset($_POST['submit'])){              
            $employeeModel = $this->loadModel('employee');
            $user = $employeeModel->get_by_username($_POST['username']);
            if ($user && $user->password != $_POST['password']) {
                $this->loginError = "Incorrect Username or Password.";
            } else if ($user && $user->password == $_POST['password']) { 
                $_SESSION['current_user'] = $user;
                header('location: ' . APP . 'home');
            } else 
                $this->loginError = "Incorrect Username or Password.";
        }

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/login/index.php';
        require APP . 'view/_templates/footer.php';
    }
    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    
    public function test()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/login/test.php';
        require APP . 'view/_templates/footer.php';
        // load views        
    }
}