<?php

namespace App\Model;

class User {
    private $id;
    private $name;
    private $birthday;

    public function __construct($id, $name, $birthday) {
        $this->id = $id;
        $this->name = $name;
        $this->birthday = $birthday;
    }

    // Методы для работы с пользователями
}
