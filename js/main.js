$(document).ready(function(){
  // on ready stuff
  $(".button-collapse").sideNav();
  $('.modal').modal();
});

// load news post
function loadNews(name) {
  $("#fullpost").modal('open');
  var n = new XMLHttpRequest();
  $("#fullpost_loader").show();
  $("#fullpostcontent").hide();

  n.onreadystatechange = function(){
    if(n.readyState == 4) {
      $("#fullpost_loader").hide();
      $("#fullpostcontent").show();
      if(n.status == 200) {
        $("#fullpostcontent").html(n.responseText);
      } else {
        $("#fullpostcontent").html("<h3>Error while loading news item</h3><p>Reload the page and try again.</p>");
        console.warn("Could not load news post. Server responded with "+n.status);
      }
    }
  }

  n.open("GET", "news.php?item="+name, true);
  n.send();
}
