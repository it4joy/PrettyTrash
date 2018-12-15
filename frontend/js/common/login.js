'use strict';

$(document).ready(function() {
  $('.link-login').on('click', function(e) {
    e.preventDefault();
    
    // use `window.crypto.getRandomValues` for parameter `state` // tmp
    let cryptoLoginArr = new Int8Array(10);
    window.crypto.getRandomValues(cryptoLoginArr);
    let cryptoLoginStr = cryptoLoginArr.toString();

    document.location.assign('https://oauth.yandex.ru/authorize?response_type=token&client_id=c2b66e3ffbe5407a928253bb3e21b83b&scope=cloud_api:disk.app_folder cloud_api:disk.read cloud_api:disk.write cloud_api:disk.info&optional_scope=login:info login:email&state=' + cryptoLoginStr + '&display=popup');
  });
});
