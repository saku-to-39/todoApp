<?php
///pdoを作る
///postsテーブルから、レコードを持ってくる
///fetchでレコードを1件ずつ処理して、持ってくる
$dsn = "sqlite:./db/todoapp.sqlite3";
$pdo = new PDO($dsn,null,null);

$sql = "select id,title from posts order by id";
$st = $pdo->query($sql);

$posts = $st->fetchAll();

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <table>
        <tr>
          <th>ID</th>
          <th>title</th>
          <th>show</th>
        </tr>
        <?php foreach($posts as $post):?>
        <tr>
          <td><?php echo $post["id"]?></td>
          <td><?php echo $post["title"]?></td>
          <td><a href="show.php?id=<?php echo $post["id"]?>">詳細</a></td>
        </tr>
        <?php endforeach?>
      </table>

    <a href="create.php">投稿画面</a>
</body>
</html>