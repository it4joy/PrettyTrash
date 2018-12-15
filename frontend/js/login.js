'use strict';

$(document).ready(function() {
  $('.link-login').on('click', function(e) {
    e.preventDefault();
    
    document.location.assign('https://oauth.yandex.ru/authorize?response_type=token&client_id=c2b66e3ffbe5407a928253bb3e21b83b&optional_scope=info email&display=popup');
  });
});
