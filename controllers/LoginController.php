<?php
class LoginController
{
    private $userModel;

    public function __construct($userModel)
    {
        $this->userModel = $userModel;
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->authenticate($username, $password);

            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header('Location: /dashboard');
                exit();
            } else {
                $error = "Invalid username or password.";
                require '../app/views/login.php';
            }
        } else {
            require '../app/views/login.php';
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login');
        exit();
    }
}