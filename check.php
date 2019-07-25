
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: index.html');
    }
    $nickname = $_POST['nickname'];
   
    $email = $_POST['email'];
    echo $email;

    $content = $_POST['content'];
    echo $content;

    if ($nickname == '') {
        $nickname_result = 'ニックネームが入力されていません。';
    } else {
        $nickname_result = 'ようこそ、' . $nickname .'様';
    }
    
    if ($email == '') {
        $email_result = 'メールアドレスが入力されていません。';
    } else {
        $email_result = 'メールアドレス：' . $email;
    }

    if ($content == '') {
        $content_result =  'お問い合わせ内容が入力されていません。';
    } else {
        $content_result = 'お問い合わせ内容：' . $content;
    }
    
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>入力内容確認</h1>
    
    <p><?php echo $nickname_result; ?></p>
    <p><?php echo $email_result; ?></p>
    <p><?php echo $content_result; ?></p>

    <?php if ($nickname != '' && $email != '' && $content != ''): ?>
    <input type="submit" value="OK">
<?php endif; ?>
    <form method="POST" action="thanks.php">
        <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">
        <input type="button" value="戻る" onclick="history.back()">
        
        
    </form>
</body>
</html>