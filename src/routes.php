<?php
// Routes
$app->get('/', function ($request, $response, $args) {
    $this->view->render($response, 'index.html');
    return $response;
})->add(new \Sports\Auth\AuthService($app->getContainer(), true));

$app->group('/panel', function () {
    $this->get('', function ($request, $response, $args) {
        $this->view->render($response, 'index.html');
        return $response;
    });
    $this->group('/events', function () {
        $this->get('/', function ($rq, $rs, $a) {
            $this->view->render($rs, 'events/list.html');
            return $rs;
        })->setName('events_list');
    });
    $this->group('/profile', function () {
        $this->get('/',\ProfileController::class. ':profileView')->setName('profile_view');
        $this->get('/edit',\ProfileController::class.':profileEdit')->setName('profile_edit');
        $this->post('/edit',\ProfileController::class.':profileEditAction')->setName('profile_edit_post');
    });
});

$app->get('/login', \LoginController::class . ':loginIndex');
$app->post('/login', \LoginController::class . ':login')->setName('login');
$app->post('/register', \LoginController::class . ':register')->setName('register');
$app->get('/logout', function ($req, $res) {
    unset($_SESSION['logged']);
    unset($_SESSION['user_id']);
    $res = $res->withStatus(302)->withHeader('Location', '/login');
    return $res;
})->setName('logout');


