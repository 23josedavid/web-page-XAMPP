<?php

namespace Core\Middleware;

class Guest
{
    public function handle()
    {
        // si YA está logueado → fuera
        if ($_SESSION['user'] ?? false) {
            header('Location: /');
            exit();
        }
    }
}
