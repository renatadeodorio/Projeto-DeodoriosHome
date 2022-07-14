<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'nomes' => [
               'José Lira',
               'Jão Lira'
            ]
        ];

        dd($users);
    }

    public function show($id)
    {
        dd('Id do usuário é ' . $id);
    }
}
