<?php

require "Parsedown.php";

class project {

  public $fancy = "";
  public $stale = "";

  public function setProj($p) {
    $this->fancy = $p;
    $this->stale = strtolower($p);
  }

  public function about() {
    $about = file_get_contents(getcwd()."/md/about.md");
    $p = new Parsedown();
    return $p->text($about);
  }

  public function dl() {
    $dl = file_get_contents(getcwd()."/md/download_structure.md");
    $p = new Parsedown();
    return $p->text($dl);
  }

  public function changelogs() {
    $p = new Parsedown();
    $a = scandir(getcwd().'/md/changelog/');
    $output = "";
    foreach($a as &$f) {
      if($f == ".." || $f == ".") {
      } else {
        $cl = file_get_contents(getcwd()."/md/changelog/".$f);
        $output .= $p->text($cl);
      }
    }
    return $output;
  }

}

?>
