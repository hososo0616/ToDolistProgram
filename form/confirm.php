<?php
// session_start();

// $name = $_SESSION['name'];
// $email = $_SESSION['email'];
// $gender = $_SESSION['gender'];
// $area = $_SESSION['area'];
// $opinion = $_SESSION['opinion'];
// $text = $_SESSION['text'];

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// }

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
    <h1>お問い合わせ確認フォーム</h1>
    <form action="./complete.php" method="POST">
      <dl>
        <dt>名前</dt>
        <dd><?php echo $_POST['name'] ?></dd>
        <dt>メール</dt>
        <dd><?php echo $_POST['email'] ?></dd>
        <dt>性別</dt>
        <dd><?php echo $_POST['gender'] ?></dd>
        <dt>お住まいの地域</dt>
        <dd><?php echo $_POST['area'] ?></dd>
        <dt>お問い合わせ理由</dt>
        <dd class="flex"><?php echo $_POST['opinion'] ?></dd>
        <dt>お問い合わせ内容</dt>
        <dd><?php echo $_POST['text'] ?></dd>
      </dl>
      <button type="submit" value="送信する" class="btn">
    </form>
  </div>
</body>

</html>