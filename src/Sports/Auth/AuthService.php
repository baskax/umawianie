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
$this->container  = $container;
    }

    public function __invoke($req, $res, $next)
    {
        if (!isset($_SESSION['logged'])) {
            $this->container['flash']->addMessage('warning','You have to log in first!');
            $res = $res->withStatus(302)->withHeader('Location', '/login');
        } else $res = $next($req, $res);

        return $res;
    }

}
