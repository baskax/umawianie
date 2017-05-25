<?php

namespace Sports\Controller;

use Psr\Container\ContainerInterface;

class Base
{

    protected $container;
    protected $view;
    protected $db;
    protected $userID;

    public function __construct(ContainerInterface $container)
    {
        $this->userID = $_SESSION['user_id'];
        $this->container = $container;
        $this->view = $container->get('view');
        $this->db = $container->get('db');
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function getView() {
        return $this->view;
    }

    public function getUserID() {
        return $this->userID;
    }

    public function getDB() {
        return $this->db;
    }
}