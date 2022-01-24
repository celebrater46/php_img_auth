<?php
//require_once('securimage/sample.php');
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Test Securimage</title>
</head>
<body>
<img id="captcha" src="securimage/securimage_show.php">
    <form action="post.php" method="post">
        <p><img id="captcha" src="securimage/securimage_show.php"></p>
        <p><input type="text" name="captcha_code" placeholder="表示されている文字を入力してください"></p>
        <p><button type="button" id="button">画像再生成</button></p>
        <p><input type="submit" value="認証"></p>
    </form>
    <script src="main.js"></script>
</body>
</html>
