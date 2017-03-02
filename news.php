<?php

  require "php/news.php";

  if(isset($_GET["item"])) {
    $n = new news();
    $content = $n->fullPost($_GET["item"]);
    echo $content;
  } else {
    die("<script>$('#fullpost').modal('close'); console.warn('News item required to load');</script><p>News item required</p>");
  }

?>
