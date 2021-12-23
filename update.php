<?php
 $title = filter_input(INPUT_POST, 'title');
 $id = filter_input(INPUT_POST, 'id');

 $dsn = "sqlite:./db/todoapp.sqlite3";
 $pdo = new PDO($dsn);
 
 $sql = "update posts set title = ? where id = ?";
 
 $ps = $pdo->prepare($sql);
 $ps->bindValue(2,$id,PDO::PARAM_INT);
 $ps->bindValue(1,$title,PDO::PARAM_STR);
 $ps->execute();

 header('Location:index.php');



?>