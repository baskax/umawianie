<?php
// Routes

$app->get('/login', \LoginController::class . ':loginIndex');
$app->post('/login',\LoginController::class . ':login')->setName('login');
$app->post('/register',\LoginController::class . ':register')->setName('register');
$app->get('/logout',function($req,$res) {
   unset($_SESSION['logged']);
    $res = $res->withStatus(302)->withHeader('Location', '/login');
    return $res;
})->setName('logout');

$app->get('/', function ($request, $response, $args) {
    $this->view->render($response, 'index.html');
    return $response;
})->add(new \Sports\Auth\AuthService($app->getContainer(),true));
