<?php

namespace Sports\Auth;

class AuthService
{
    protected $expectLogged;
    protected $isLogged;
    protected $container;

    /**
     * AuthService constructor.
     * @param $container - dependency injection container used to get access to db and flash
     * @param bool $expectLogged - variable saying if we need user to be logged in or not
     */
    public function __construct($container,$expectLogged = true)
    {
        $this->container = $container;
        $this->expectLogged = $expectLogged;
        isset($_SESSION['logged']) ? $this->isLogged = true : $this->isLogged = false;
    }

    public function userLogged(): bool
    {
        return $this->isLogged;
    }


    public function __invoke($req, $res, $next)
    {
        if ($this->expectLogged == true && !$this->userLogged()) {
            $this->container['flash']->addMessage('warning','You have to log in first!');
            $res = $res->withStatus(302)->withHeader('Location', '/login');
        } elseif ($this->expectLogged == false && $this->userLogged()) {
            $this->container['flash']->addMessage('info','You are already logged in!');
            $res = $res->withStatus(302)->withHeader('Location', '/');
        }

        return $res;
    }

}
