<?php

use Core\App;
use Core\Database;

$db = App::container()->resolve(Database::class);

$currentUsuarioId = 5; 

    $note = $db->query('SELECT * FROM notes where id= :id',[
    'id'=> $_GET['id']
])->findorFail();

authorize($note['user_id'] != $currentUsuarioId);
  
 view("notes/edit.view.php",[
    'heading' => 'Edit Note',
    'errors' => [],
    'note' => $note
 ]);