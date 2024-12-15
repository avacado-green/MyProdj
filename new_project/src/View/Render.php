<?php

namespace App\View;

use Twig\Environment;

class Render {
    public static function renderExceptionPage(Environment $twig, $exception) {
        header("HTTP/1.1 404 Not Found");
        echo $twig->render('error.twig', ['message' => $exception->getMessage()]);
    }
}
