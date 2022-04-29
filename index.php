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
      <div class="display-2">Üdvözöljük a könyvtárban!</div>
    </div>

        <!-- <a class="navbar-brand" href="#">Navbar</a> -->

<?php
  echo menu();

?>

    <div class="row text-center">
      <div class="col-1"></div>
    <img src="books.jpg" class="img-fluid col-10" alt="books">
      <div class="col-1"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>