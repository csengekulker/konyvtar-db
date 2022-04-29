<?php
  include_once('menu.php');
  include_once('connect.php');
  include_once('addBookForm.php');
  include_once('bookTable.php');
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

<?php
  echo menu();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid text-center pb-4">
    <button class="navbar-toggler col-12" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      Új könyv felvétele
    </button>
    <div class="collapse navbar-collapse mt-3" id="navbarSupportedContent">

<?php
  addBookForm();

?>    
    </div>
  </div>
</nav>


<?php
  bookTable();
?>


    <div class="row text-center">
      <div class="col-1"></div>
       <div class="col-1"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>