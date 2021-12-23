<?php
 $title = filter_input(INPUT_POST, 'title');
 $id = filter_input(INPUT_POST, 'id');

 $dsn = "sqlite:./db/todoapp.sqlite3";
 $pdo = new PDO($dsn);
 
 $sql = "insert into posts (id, title) values (?, ?)";
 
 $ps = $pdo->prepare($sql);
 $ps->bindValue(1,$id,PDO::PARAM_INT);
 $ps->bindValue(2,$title,PDO::PARAM_STR);
 $ps->execute();

 header('Location:index.php');



?>
