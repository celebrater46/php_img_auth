<?php

namespace php_img_auth;

use common_modules as cm;

require_once "pia_init.php";
require_once (PIA_HTML_COMMON_MODULE);

function get_words($lang){
    if($lang === 1){
        return [
            "regenerate" => "regenerate",
            "placeholder" => "Please type the code of the image.",
            "submit" => "SUBMIT"
        ];
    } else {
        return [
            "regenerate" => "画像変更",
            "placeholder" => "表示されている文字を入力してください",
            "submit" => "認証"
        ];
    }
}

function pia_get_html($is_form, $lang, $path){
    $words = get_words($lang);
    $html = "";
    if($is_form){
        $html .= cm\space_br('<form action="' . PIA_HTTP_PATH . 'post.php" method="post">', 1);
    }
    $html .= cm\space_br('<p><img id="captcha" src="' . PIA_HTTP_PATH . 'securimage/securimage_show.php"></p>', 2);
    $html .= cm\space_br('<p><input type="text" name="captcha_code" placeholder="' . $words["placeholder"] . '"></p>', 2);
    $html .= cm\space_br('<p><button type="button" id="pia_regenerate">' . $words["regenerate"] . '</button></p>', 2);
    if($is_form){
        $html .= cm\space_br('<p><input type="submit" value="' . $words["submit"] . '"></p>', 2);
        $html .= cm\space_br('</form>', 1);
    }
    return $html;
}

function pia_get_script_html($path){
    $html = cm\space_br('<script>', 1);
    $html .= cm\space_br("const button = document.getElementById('pia_regenerate');", 2);
    $html .= cm\space_br("button.addEventListener('click', () => {", 2);
    $html .= cm\space_br("const captcha = document.getElementById('captcha');", 3);
    $html .= cm\space_br("captcha.src = '" . PIA_HTTP_PATH . "' + 'securimage/securimage_show.php?' + Math.random();", 3);
    $html .= cm\space_br("}, false);", 2);
    $html .= cm\space_br('</script>', 1);
    return $html;
}