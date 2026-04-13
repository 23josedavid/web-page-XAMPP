<?php 

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::container()->resolve(Database::class);

$currentUsuarioId = 5; 

// find the correspondi note
$note = $db->query('SELECT * FROM notes where id= :id',[
    'id'=> $_POST['id']
])->findorFail();

//authorizethat the current user can edit the note
authorize($note['user_id'] != $currentUsuarioId);

// validate the form
$errors = []; 

if (! Validator::string($_POST['body'], 1,1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required';
}

// if no validation error, update the record in the notes database table. 
if (count($errors)) {
    return  view("notes/edit.view.php",[
    'heading' => 'Edit Note',
    'errors' => $errors,
    'note' => $note
 ]);    
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
]);

//  redirect the user 

header('location: /notes');
die(); 