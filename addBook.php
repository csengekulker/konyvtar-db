<?php
    include_once("connect.php");
    $konyvszam = $_REQUEST['konyvszam'];
    $szerzo = $_REQUEST['szerzo'];
    $cim = $_REQUEST['cim'];
    $kiado = $_REQUEST['kiado'];
    $ev = $_REQUEST['ev'];

    addBook($konyvszam, $szerzo, $cim, $kiado, $ev);

    header("Location: books.php");
?>