<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    $dbObj = ADONewConnection('mysqli');
    $dbObj->debug = $db['debug'];
    $dbObj->SetFetchMode(ADODB_FETCH_ASSOC);
    $dbObj->Connect($db['host'], $db['user'], $db['pass'], $db['dbname']);
    return $dbObj;
};

$container['LoginController'] = function($c) {
    $view = $c->get("view"); // retrieve the 'view' from the container
    $db = $c->get("db");
    $flash = $c->get("flash");
    return new Sports\Controller\Login($view,$db,$flash);
};

$container['ProfileController'] = function($c) {
    $view = $c->get("view"); // retrieve the 'view' from the container
    $db = $c->get("db");
    $flash = $c->get("flash");
    return new Sports\Controller\Profile($view,$db,$flash);
};
$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../templates', [
        'cache' => '../cache',
        'auto_reload' => true
    ]);
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    $view->addExtension(new Knlv\Slim\Views\TwigMessages(
        new Slim\Flash\Messages()
    ));
    return $view;
};