<?php

function menu() {
  $menuStr= '<nav class="navbar navbar-expand-lg navbar-light">';
  $menuStr.='<div class="container-fluid text-center">';
  $menuStr.='<button class="navbar-toggler col-12" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">';
  $menuStr.='<span class="navbar-toggler-icon"></span>';
  $menuStr.='</button>';
  $menuStr.='<div class="collapse navbar-collapse" id="navbarNavDropdown">';
  $menuStr.='  <ul class="navbar-nav">';
  $menuStr.='  <li class="nav-item">';
  $menuStr.='  <a class="nav-link" aria-current="page" href="index.php">Kezdőlap</a>';
  $menuStr.='  </li>';
  $menuStr.='  <li class="nav-item">';
  $menuStr.='  <a class="nav-link" aria-current="page" href="books.php">Könyvek</a>';
  $menuStr.='  </li>';
  $menuStr.='  <li class="nav-item">';
  $menuStr.='    <a class="nav-link" href="readers.php">Olvasók</a>';
  $menuStr.='  </li>';
  $menuStr.='  <li class="nav-item">';
  $menuStr.='    <a class="nav-link" href="borrows.php">Kölcsönzések</a>';
  $menuStr.='  </li>';
  $menuStr.='  </ul>';
  $menuStr.='</div>';
  $menuStr.='</div>';
  $menuStr.='</nav>';

  return $menuStr;
}

?>