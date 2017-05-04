<?php

namespace Sports\Controller;

class Login
{
    protected $view;
    protected $db;
    protected $flash;

    public function __construct(\Slim\Views\Twig $view, $db, $flash)
    {
        $this->view = $view;
        $this->db = $db;
        $this->flash = $flash;
    }

    public function loginIndex($request, $response, $args)
    {
        $this->view->render($response, 'login/login.html');
        return $response;
    }

    public function login($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $login = $body['username'];
        $pass = $body['password'];
        $query = "SELECT password FROM users WHERE username='$login' AND status=1 ORDER BY id DESC LIMIT 1";
        $ret = $this->db->GetRow($query);
        if ($ret && password_verify($pass,$ret['password'])) {
            $_SESSION['logged'] = true;
            $response = $response->withStatus(302)->withHeader('Location', '/');
        } else {
            $this->flash->addMessage('warning','Username or password incorrect!');
            $response = $response->withStatus(302)->withHeader('Location', '/login');
        }
        return $response;
    }

    public function register($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $login = $body['username'];
        $email = $body['email'];
        $pass = $body['password'];
        $hash = password_hash($pass,PASSWORD_BCRYPT);
        $query = "INSERT INTO user (username,email,password,status) VALUES ('$login','$email','$hash',1)";
        $ret = $this->db->Execute($query);
        if ($ret) {
            $this->flash->addMessage('success','You have successfully registered an account');
            $response = $response->withStatus(302)->withHeader('Location', '/login');
        }
        return $response;
    }
}
