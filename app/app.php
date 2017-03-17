<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Cd.php';

    session_start();

    if (empty($_SESSION['list_of_cds'])) {
        $_SESSION['list_of_cds'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render('body.html.twig');
    });

    $app->post("/cdlist", function() use($app) {
        $cdlist = new Cd($_POST['bandname'], $_POST['albumname'], $_POST['genre']);
        $cdlist->save();
        return $app['twig']->render('body.html.twig', array('cds' => Cd::getAll()));
    });

    $app->post("/delete", function () use($app) {
        Cd::deleteAll();
        return $app['twig']->render('body.html.twig');
    });

    return $app;
?>
