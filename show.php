<?php
//渡されたidをとってくる
//sqlで渡されたidと一緒の「レコードをとってきて表示する

$id = filter_input(INPUT_GET, 'id');

$dsn = "sqlite:./db/todoapp.sqlite3";
$pdo = new PDO($dsn,null,null);

$sql = "select id, title from posts where id = ?";

$ps = $pdo->prepare($sql);
$ps->bindValue(1,$id,PDO::PARAM_INT);
$ps->execute();

$post = $ps->fetch();

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
    <?php echo $post['id']?>
    <?php echo $post['title']?>
</body>
</html>