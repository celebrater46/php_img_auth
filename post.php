<?php

require_once 'securimage/securimage.php';

$securimage = new Securimage();

if(isset($_POST['captcha_code'])) {
    if($securimage->check($_POST['captcha_code']) === true) {
        echo '画像認証OK';
    } else {
        echo '画像認証エラー';
    }
}