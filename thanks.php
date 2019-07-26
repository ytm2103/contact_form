<?php

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: index.html');
    }

    require_once('function.php');
    require_once('dbconnect.php');
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    $stmt = $dbh->prepare('INSERT INTO surveys (nickname, email, content) VALUES (?, ?, ?)');
    $stmt->execute([$nickname, $email, $content]);//?を変数に置き換えてSQLを実行

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>お問い合わせありがとうございました！</h1>
    <p><?php echo h($nickname); ?></p>
    <p><?php echo h($email); ?></p>
    <p><?php echo h($content); ?></p>
</body>
</html>