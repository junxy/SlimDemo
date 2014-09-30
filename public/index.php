<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\Slim(
    [
        'view' => new Slim\Views\Twig(),
        'templates.path' => __DIR__ . '/../app/views',
    ]);

$view = $app->view();
$view->parserOptions = [
    'debug' => true,
    'cache' => __DIR__ . '/../app/storage/cache/twig',
    'auto_reload' => true,
];

$view->parserExtenstions = [
    new \Slim\Views\TwigExtension(),
];

$app->get('/', function () use ($app) {

//    $app->view()->appendData(['a_variable' => 'hello world']);

    $app->render('index.html.twig', ['a_variable' => 'hello world']);
});

$app->run();
