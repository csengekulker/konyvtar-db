<?php

function addBookForm() {
    echo <<<EOT
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
    EOT;
}

?>