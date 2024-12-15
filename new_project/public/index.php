<?php

require_once '../vendor/autoload.php';

use App\Controller\UserController;
use App\View\Render;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

try {
    $loader = new FilesystemLoader('../templates');
    $twig = new Environment($loader);

    $app = new UserController($twig);

    if ($_SERVER['REQUEST_URI'] === '/delete' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $app->delete();
    } elseif (preg_match('/\/edit\/(\d+)/', $_SERVER['REQUEST_URI'], $matches)) {
        $app->editForm($matches[1]);
    } elseif ($_SERVER['REQUEST_URI'] === '/update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $app->update();
    } else {
        echo $app->run();
    }
} catch (Exception $e) {
    Render::renderExceptionPage($twig, $e);
}

