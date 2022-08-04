<?php
session_start();
$todo = $_SESSION['todo'];

function h($value)
{
  return htmlspecialchars($value, ENT_QUOTES);
}

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
  <div class="list">
    <p>登録完了ページ</p>
    <p class="title">予定タイトル</p>
    <ul class="todolist">
      <li><?php echo h($todo) ?></li>
    </ul>
  </div>
</body>

</html>