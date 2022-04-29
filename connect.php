<?php
  function connectLibrary () {
    $conn = mysqli_connect("localhost", "root", "") or die("Csatlakozási hiba!");

    if (!mysqli_select_db($conn, "konyvtar")) {
      return null;
    } else {
      return $conn;
    }
  }

  function getBookList() {
    if(!($conn=connectLibrary())) {
      return false;
    } else {
      $result = mysqli_query($conn, "select * from konyvek");
      mysqli_close($conn);
      return $result;
    }
  }

  function addBook($konyvszam, $szerzo, $cim, $kiado, $ev) {
    if (!($conn=connectLibrary())) {
      return false;
    } else {
      $stmt = mysqli_prepare(
        $conn,
        "insert into konyvek(konyvszam, szerzo, cim, kiado, ev) values(?,?,?,?,?)"
      );
      mysqli_stmt_bind_param($stmt, "ssssd", $konyvszam, $szerzo, $cim, $kiado, $ev  );

      $result = mysqli_stmt_execute($stmt);
      mysqli_close($conn);
      return $result;
    }
  }


?>