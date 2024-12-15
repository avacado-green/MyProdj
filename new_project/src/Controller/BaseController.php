<?php

namespace App\Controller;

use Twig\Environment;

class BaseController {
    protected $twig;

    public function __construct(Environment $twig) {
        $this->twig = $twig;
    }

    protected function render($template, $data = []) {
        echo $this->twig->render($template, $data);
    }
}
