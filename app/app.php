<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Cd.php';

    session_start();

    if (empty($_SESSION['list_of_cds'])) {
    $_SESSION['list_of_cds'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render('inventory.html.twig');
    });

    return $app;
?>
