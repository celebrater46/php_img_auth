"use strict";

// const pia_path = "";
// const pia_path = "plugins/php_img_auth/";
const pia_path = "https://enin-world.sakura.ne.jp/test_php/php_hp_bbs_2/plugins/php_img_auth/";

const button = document.getElementById('pia_regenerate');
button.addEventListener('click', () => {
    const captcha = document.getElementById('captcha');
    captcha.src = pia_path + 'securimage/securimage_show.php?' + Math.random();
}, false);