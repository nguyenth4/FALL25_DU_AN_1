<?php

class AuthController
{

    private $userModel;

    public function __construct($connection)
    {
        $this->userModel = new User($connection);
    }

    public function login(): void
    {
        require_once "Views/login.php";
    }

    public function handleLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->userModel->getOneUsers($email);

        if (empty($user) || !password_verify($password, $user['password'])) {
            $_SESSION['error'] = "Tài khoản hoặc mật khẩu của bạn không đúng.";
            header("Location: /?view=login");
            return;
        } else {
            $_SESSION['user'] = $user;
            header("Location: /");
            return;
        }
        // dump($user);
        // die;
        // echo "Handling login logic here.";
    }
}
