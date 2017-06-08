<?php
// Routes
$app->get('/', function ($request, $response, $args) {
    $this->view->render($response, 'layout.html');
    return $response;
})->add(new \Sports\Auth\AuthService($app->getContainer(), true));

$app->group('/panel', function () {
    $this->get('', function ($request, $response, $args) {
        $this->view->render($response, 'layout.html');
        return $response;
    });

    $this->group('/profile', function () {
        $this->get('/', \ProfileController::class . ':profileView')->setName('profile_view');
        $this->get('/edit', \ProfileController::class . ':profileEdit')->setName('profile_edit');
        $this->post('/edit', \ProfileController::class . ':profileEditAction')->setName('profile_edit_post');
    });
    $this->group('/events', function() {
        $this->get('/','\Sports\Controller\Event:listAction')->setName('events_list');
        $this->get('/add','\Sports\Controller\Event:addAction')->setName('events_add');
        $this->post('/add','\Sports\Controller\Event:addAction')->setName('events_add_post');
        $this->get('/manage','\Sports\Controller\Event:manageAction')->setName('events_manage');
        $this->get('/details/{id}','\Sports\Controller\Event:detailsAction')->setName('event_detail');
        $this->get('/attend/{id}','\Sports\Controller\Event:attendAction')->setName('event_attend');
        $this->get('/unattend/{id}','\Sports\Controller\Event:unattendAction')->setName('event_unattend');
    });
})->add(new \Sports\Auth\AuthService($app->getContainer()));

$app->get('/login', \LoginController::class . ':loginIndex');
$app->post('/login', \LoginController::class . ':login')->setName('login');
$app->post('/register', \LoginController::class . ':register')->setName('register');
$app->get('/logout', function ($req, $res) {
    unset($_SESSION['logged']);
    unset($_SESSION['user_id']);
    $res = $res->withStatus(302)->withHeader('Location', '/login');
    return $res;
})->setName('logout');


