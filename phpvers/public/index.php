<?php include "data.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="all">
    <header>
      <div class="nav">
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row">
          <?php foreach ($database as $disc) { ?>
            <div class="col-4">
              <div class="disc">
              <img src="<?= $disc['poster']?>" alt="">
              <h6><?= $disc['title']?></h6>
              <p><?= $disc['author']?></p>
              <p><?= $disc['year']?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </main>
  </div>
</body>
</html>