"use strict";

const button = document.getElementById('button');
button.addEventListener('click', () => {
    const captcha = document.getElementById('captcha');
    captcha.src = 'securimage/securimage_show.php?' + Math.random();
}, false);