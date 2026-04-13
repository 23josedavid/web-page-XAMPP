<?php

use Core\Session;
use Core\Database;

// validar datos (email y password)
$email = $_POST['email'];
$password = $_POST['password'];

$db = new Database();

$user = $db->query(
    'SELECT * FROM users WHERE email = :email',
    ['email' => $email]
)->find();

if (!$user || !password_verify($password, $user['password'])) {
    Session::flash('errors', ['email' => 'Credenciales incorrectas']);
    header('Location: /login');
    exit;
}

// ✅ AQUÍ ESTABA EL PROBLEMA
Session::put('user', [
    'id' => $user['id'],
    'email' => $user['email']
]);

header('Location: /notes');
exit;




