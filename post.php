<?php

namespace php_img_auth;

use Securimage;

require_once 'securimage/securimage.php';

$securimage = new Securimage();

if(isset($_POST['captcha_code'])) {
    if($securimage->check($_POST['captcha_code']) === true) {
        echo 'Authorized.';
    } else {
        echo 'Not authorized.';
    }
}