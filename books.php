<?php
  include_once('menu.php');
  include_once('connect.php');
?>

<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Könyvtár</title>

</head>
<body>
  <div class="container-fluid bg-secondary m-0 text-light">
    <div class="row text-center my-4">
      <div class="display-2">Könyvek</div>
    </div>

        <!-- <a class="navbar-brand" href="#">Navbar</a> -->

<?php
  echo menu();
?>

<form action="addBook.php" method="get">
  <div class="row">
  <div class="form-floating mb-3 col">
    <input type="text" class="form-control form-control-sm bg-secondary" id="bookId" name="konyvszam">
    <label for="bookId">Könyvszám</label>
  </div>
  <div class="form-floating mb-3 col">
    <input type="text" class="form-control form-control-sm bg-secondary" id="author" name="szerzo">
    <label for="author">Szerző</label>
  </div>
  </div>
  
  
  <div class="form-floating mb-3">
    <input type="text" class="form-control form-control-sm bg-secondary" id="title" name="cim">
    <label for="title">Cím</label>
  </div>
  
  
  <div class="row">
    <div class="form-floating mb-3 col">
      <input type="text" class="form-control form-control-sm bg-secondary" id="publisher" name="kiado">
      <label for="publisher">Kiadó</label>
    </div>
    <div class="form-floating mb-3 col">
      <input type="text" class="form-control form-control-sm bg-secondary" id="year" name="ev">
      <label for="year">Év</label>
    </div>
  </div>
  
  <button type="submit" class="btn btn-secondary col-12">Feltöltés</button>
</form>




<table class="table">
  <thead>
    <tr>
      <th scope="col">Könyvszám</th>
      <th scope="col">Szerző</th>
      <th scope="col">Cím</th>
      <th scope="col">Törlés</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

      $books = getBookList();

      while ($line=mysqli_fetch_assoc($books)) {
        echo '<tr>';
        echo '<td>'.$line['konyvszam'].'</td>';
        echo '<td>'.$line['szerzo'].'</td>';
        echo '<td>'.$line['cim'].'</td>';

        echo '<td><a href="delete.php"><button class="btn btn-danger">X</button></a></td>';
        echo '</tr>';
      }
    ?>
    </tr>

  </tbody>
</table>

    <div class="row text-center">
      <div class="col-1"></div>
    <!-- <img src="books.jpg" class="img-fluid col-10" alt="books"> --> 
       <div class="col-1"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>