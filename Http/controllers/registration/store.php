<?php
use Core\App;
use Core\Database;
use Core\validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

// Validate the form inputs.
$errors = [];
if (!Validator::email($email)) {
    $errros['email'] = "Please provide a valid email address.";
}

if (!Validator::string($password, 7, 255)) {
    $errros['email'] = "Please provide a password of t least seven characters.";
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'heading' => 'Register',
        'errors' => $errors,
    ]);
} 

$user = $db->query('select * from user where email = :email', [
    'email' => $email
])->find();

if ($user) {
    // then someone woth that email already exists nd has on account.
    // If yes, redirect to a login page.
    header ('location: /');
    exit();
}else {
// If not, save one to the database, and the log the user in, and redirect to the home page.
    $db->query('INSERT INTO user(email, password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header ('location: /');
    exit();
}