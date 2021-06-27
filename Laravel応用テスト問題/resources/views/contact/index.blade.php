<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
</head>
<body>
<form action="/contact" method="POST">
  @csrf
  <h2>氏名</h2>
  <br />
  <input type="text" name="name">
  <br />
  <h2>メールアドレス</h2>
  <input type="text" name="email">
  <br />
  <input type="submit">
  </form>
</body>
</html>