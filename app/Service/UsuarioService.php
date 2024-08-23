<?php

namespace App\Service;

use App\Models\Usuario;

class UsuarioService
{
    public function create(array $dados)
    {
        $user = Usuario::create([
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'password' => $dados['password']
        ]);

        return $user;
    }

    public function uptade()
    {
    }

    public function delete()
    {
    }

    public function FindById()
    {
    }

    public function getAll()
    {
    }

    public function searchByName()
    {
    }
}
