<?php 

use Core\App;
use Core\Database;

$db = App::container()->resolve(Database::class);

$currentUsuarioId = 5; 

    $note = $db->query('SELECT * FROM notes where id= :id',[
    'id'=> $_POST['id']
])->findorFail();

authorize($note['user_id'] != $currentUsuarioId);
  
   $db->query('delete from notes where id = :id',[
    'id' => $_POST['id'] 
]);

header ('location: /notes');
exit();

