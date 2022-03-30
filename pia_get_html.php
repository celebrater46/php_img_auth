<?php

namespace php_img_auth;

use php_img_auth\modules as modules;

require_once "init.php";
require_once "modules/html_common_module.php";

function pia_get_html(){
    $html = modules\space_br('<form action="' . PIA_PATH . 'post.php" method="post">', 1);
    $html .= modules\space_br('<p><img id="captcha" src="' . PIA_PATH . 'securimage/securimage_show.php"></p>', 2);
    $html .= modules\space_br('<p><input type="text" name="captcha_code" placeholder="Please type the code of the image."></p>', 2);
    $html .= modules\space_br('<p><button type="button" id="button">Regenerate</button></p>', 2);
    $html .= modules\space_br('<p><input type="submit" value="Submit"></p>', 2);
    $html .= modules\space_br('</form>', 1);
    return $html;
}