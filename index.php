<?php

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Test Securimage</title>
</head>
<body>
    <form action="post.php" method="post">
        <p><img id="captcha" src="securimage/securimage_show.php"></p>
        <p><input type="text" name="captcha_code" placeholder="Please type the code of the image."></p>
        <p><button type="button" id="button">Regenerate</button></p>
        <p><input type="submit" value="Submit"></p>
    </form>
    <script src="main.js"></script>
</body>
</html>
