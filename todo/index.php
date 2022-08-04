<?php 
  session_start();

  $todo = filter_input(INPUT_POST, 'todo', FILTER_SANITIZE_STRING);
  $_SESSION['todo'] = $todo;

?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <div class="container">
    <div class="wrapper">
      <h1>ToDoリスト</h1>
      <p>予定タイトル</p>
      <form action="./result.php" method="POST" class="form">
        <input type="text" name="todo" class="todo" placeholder="例)買い物" required>
        <input type="submit" value="送信" class="submit">
      </form>
    </div>
  </div>
</body>
</html>