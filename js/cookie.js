/* http://www.w3schools.com/js/js_cookies.asp */
/* if it works, don't fix it. */

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

/* init load */
$(document).ready(function(){
  // check if cookie is set
  if(getCookie("yescookies") == "") {
    // ask for cookies permission
    $("body").append("<div id='cookienotice' onclick='acceptCk()' class='center-align' style='display:none;z-index:100;position:fixed;bottom:0;left:0;padding:5px;width:100%;background:black;color:white;'><b>v0lture Solutions</b> uses cookies to improve your experience on our services.<br />By using this site you agree to our <a href='https://v0lture.com/policies.php#privacy' style='color:white;text-transform:capitalize;border-bottom:solid white 1px;'>privacy policy</a>.<br /> Click to dismiss this message.");
    $("#cookienotice").slideDown();
  }
})

function acceptCk(){
  $("#cookienotice").slideUp();
  setCookie('yescookies', 'yum', 365);
}
