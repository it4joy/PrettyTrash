'use strict';

//console.log('test'); // tmp

$(document).ready(function() {
  // getting token
  let hash = location.hash;

  if( hash.indexOf("token=") != -1 ) {
    let tokenStartPos = hash.indexOf("token=");
    console.log(tokenStartPos); // tmp
    let tokenStartPosCorrect = tokenStartPos + 6;
    console.log(tokenStartPosCorrect); // tmp
    let tokenEndPos = hash.indexOf("&token_type");
    console.log(tokenEndPos); // tmp
    let tokenLength = tokenEndPos - tokenStartPosCorrect;
    console.log(tokenLength); // tmp
    let token = hash.substr(tokenStartPosCorrect, tokenLength);
    console.log(token); // tmp
  }
});
