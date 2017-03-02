<?php

  require "Parsedown.php";
  class news {

    public function getNewsSnippet($name) {
      $p = new Parsedown();
      if(file_exists('news/'.$name.'.md')) {
        $n = file_get_contents('news/'.$name.".md");
        // trim to 500 chars and process md
        $n = substr($p->text($n), 0, 500);
        $n .= " <a href='#!' onclick='loadNews(\"".$name."\")' class='news-readmore'>read more</a>";
        return $n;
      } else {
        // news item does't exist
        return "News item (news/".$name.".md) doesn't exist.";
      }
    }

    public function fullPost($name) {
      $p = new Parsedown();
      if(file_exists('news/'.$name.'.md')) {
        $n = file_get_contents('news/'.$name.".md");
        // process md
        return $p->text($n);
      } else {
        // news item does't exist
        return "News item (news/".$name.".md) doesn't exist.";
      }
    }

    public function newsSnippets() {
      $p = new Parsedown();
      $a = scandir(getcwd().'/news/');
      $output = "";
      foreach($a as &$f) {
        if($f == ".." || $f == ".") {
        } else {
          $output .= $this->getNewsSnippet(substr($f, 0, -3));
        }
      }
      return $output;
    }

  }

?>
