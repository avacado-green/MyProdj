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
    echo $app->run();
} catch (Exception $e) {
    Render::renderExceptionPage($twig, $e);
}
