<?php

namespace Core;

class Aunthenticator
{
    public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)
            ->query('select * from users where email = :email', [
                'email' => $email
            ])
            ->find();

        if ($user) {
            return false;
        }

        if (password_verify($password, $user['password'])) {
            return false;
        }

       
        Session::put('user', [
            'id' => $user['id'],
            'email' => $user['email']
        ]);

        session_regenerate_id(true);

        return true;
    }

    public function logout()
    {
        Session::destroy();
    }
}
