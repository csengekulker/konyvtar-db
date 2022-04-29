<?php
include_once('connect.php');



function bookTable() {
    $output = '
    <table class="table">
    <thead>
      <tr>
        <th scope="col">Könyvszám</th>
        <th scope="col">Szerző</th>
        <th scope="col">Cím</th>
        <th scope="col">Kiadó</th>
        <th scope="col">Év</th>
        <th scope="col">Törlés</th>
      </tr>
    </thead>
    <tbody>
    <tr>';

    $output2 = '
    </tr>
     </tbody>
    </table>';

    echo $output;
    displayBook();
    echo $output2;

}

function displayBook() {
    $books = getBookList();

    $bookarray = array();

    $i = 0;

    while ($line=mysqli_fetch_assoc($books)) {

    $book = '
        <tr>
            <td>'.$line['konyvszam'].'</td>
            <td>'.$line['szerzo'].'</td>
            <td>'.$line['cim'].'</td>
            <td>'.$line['kiado'].'</td>
            <td>'.$line['ev'].'</td>
            <td><a href="delete.php"><button class="btn btn-danger">X</button></a></td>
            
        </tr>
    ';

    array_push($bookarray, $book);

    echo $bookarray[$i];

    $i++;
    }




}

// $books = getBookList();
  
//   while ($line=mysqli_fetch_assoc($books)) {
//       print ('<tr>');
//       print ('<td>'.$line["konyvszam"].'</td>');
//       print ('<td>'.$line['szerzo'].'</td>');
//       print ('<td>'.$line['cim'].'</td>');

//       print ('<td><a href="delete.php"><button class="btn btn-danger">X</button></a></td>');
//       print ('</tr>');
?>