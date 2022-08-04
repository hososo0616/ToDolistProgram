<?php
// session_start();

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
//   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
//   $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
//   $area = filter_input(INPUT_POST, 'area', FILTER_SANITIZE_STRING);
//   $opinion = filter_input(INPUT_POST, 'opinion', FILTER_SANITIZE_STRING);
//   $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

//   $_SESSION['name'] = $name;
//   $_SESSION['email'] = $email;
//   $_SESSION['gender'] = $gender;
//   $_SESSION['area'] = $area;
//   $_SESSION['opinion'] = $opinion;
//   $_SESSION['text']=$text;
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
    <h1>お問い合わせフォーム</h1>
    <form action="./confirm.php" method="POST">
      <dl>
        <dt>名前</dt>
        <dd><input type="text" name="name" class="w300" required></dd>
        <dt>メール</dt>
        <dd><input type="email" name="email" class="w300" required></dd>
        <dt>性別</dt>
        <dd>
          <input type="radio" name="gender" value="male" id="men" checked>
          <label for="men">男性</label>
          <input type="radio" name="gender" value="female" id="women">
          <label for="women">女性</label>
        </dd>
        <dt>お住まいの地域</dt>
        <dd>
          <select name="area" id="area" class="w300">
            <option value="">--選択してください--</option>
            <option value="hokkaido">北海道</option>
            <option value="tohoku">東北</option>
            <option value="kanto">関東</option>
            <option value="tyubu">中部</option>
            <option value="kansai">関西</option>
            <option value="kyushu">九州</option>
            <option value="okinawa">沖縄</option>
          </select>
        </dd>
        <dt>お問い合わせ理由</dt>
        <dd class="flex">
          <div>
            <input type="checkbox" name="opinion[]" id="why">
            <label for="why">質問</label>
          </div>
          <div>
            <input type="checkbox" name="opinion[]" id="opinion">
            <label for="opinion">ご意見ご要望</label>
          </div>
          <div>
            <input type="checkbox" name="opinion[]" id="siryou">
            <label for="siryou">資料請求</label>
          </div>
          <div>
            <input type="checkbox" name="opinion[]" id="irai">
            <label for="irai">掲載依頼</label>
          </div>
          <div>
            <input type="checkbox" name="opinion[]" id="others">
            <label for="others">その他</label>
          </div>
        </dd>
        <dt>お問い合わせ内容</dt>
        <dd><textarea class="w300 h100" name="text" id="text" placeholder="例）具体的な内容を記載"></textarea></dd>
      </dl>
      <button type="submit" class="btn">確認画面へ
    </form>
  </div>
</body>

</html>