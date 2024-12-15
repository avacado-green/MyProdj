<?php

namespace App\Controller;

use App\Model\User;
use Exception;

class UserController extends BaseController {
    public function save() {
        $name = $_GET['name'] ?? null;
        $birthday = $_GET['birthday'] ?? null;

        if ($name && $birthday) {
            // Логика сохранения пользователя
        } else {
            throw new Exception('Invalid data');
        }
    }

    public function update() {
        $id = $_GET['id'] ?? null;
        $name = $_GET['name'] ?? null;

        if ($id && $name) {
            // Логика обновления пользователя
        } else {
            throw new Exception('Invalid data');
        }
    }

    public function delete() {
        $id = $_GET['id'] ?? null;

        if ($id) {
            // Логика удаления пользователя
        } else {
            throw new Exception('Invalid data');
        }
    }
}
