<?php
//PDOインスタンスの作成
 $pdo = new PDO("sqlite:./db/todoapp.sqlite3",null,null);
//SQLクエリの作成
 $sql = "select id, title from posts order by id";
 //クエリメソッドでPDOステートメントインスタンスを作る
 $st = $pdo->query($sql);
//メソッドでpostsテーブルを二次元配列でとってくる.
 $posts = $st->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todoApp</title>
</head>
<body>
    <?php foreach($posts as $post):?>
      <h4><?php echo $post["id"];?></h4>
      <h4><?php echo $post["title"];?></h4>
    <?php endforeach?>
</body>
</html>