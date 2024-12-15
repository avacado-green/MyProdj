<?php

namespace App\Controller;

use App\Model\User;
use Exception;

class UserController extends BaseController {
    public function delete() {
        $id = $_POST['id'] ?? null;

        if ($id) {
            echo json_encode(['status' => 'success']);
        } else {
            throw new Exception('Invalid data');
        }
    }

    public function editForm($id) {
        $user = User::find($id);

        $this->render('edit.twig', ['user' => $user]);
    }

    public function update() {
        $id = $_POST['id'] ?? null;
        $name = $_POST['name'] ?? null;

        if ($id && $name) {
            $user = User::find($id);
            $user->name = $name;
            $user->save();

            header('Location: /users');
        } else {
            throw new Exception('Invalid data');
        }
    }
}

