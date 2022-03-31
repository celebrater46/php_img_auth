<?php

namespace php_img_auth;

use common_modules as cm;

require_once "init.php";
require_once PIA_HTML_COMMON_MODULE;
//require_once ( dirname(__FILE__) . '/../../../' . PHBBS_HCM_PATH);

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

function pia_get_html($is_form, $lang){
    $words = get_words($lang);
    $html = "";
    if($is_form){
        $html .= cm\space_br('<form action="' . PIA_PATH . 'post.php" method="post">', 1);
    }
    $html .= cm\space_br('<p><img id="captcha" src="' . PIA_PATH . 'securimage/securimage_show.php"></p>', 2);
    $html .= cm\space_br('<p><input type="text" name="captcha_code" placeholder="' . $words["placeholder"] . '"></p>', 2);
    $html .= cm\space_br('<p><button type="button" id="pia_regenerate">' . $words["regenerate"] . '</button></p>', 2);
    if($is_form){
        $html .= cm\space_br('<p><input type="submit" value="' . $words["submit"] . '"></p>', 2);
        $html .= cm\space_br('</form>', 1);
    }
    return $html;
}