

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
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="artisti">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row tutti">
          
        </div>
      </div>
    </main>
  </div>

  <script id="template-filter" type="text/x-handlebars-template">
    <a href="#">{{artista}}</a>   
  </script>

  <script id="template-disc" type="text/x-handlebars-template">
    <div class="col-4">
      <div class="disc">
        <img src="{{poster}}" alt="">
        <h6>{{title}}</h6>
        <p class="author">{{author}}</p>
        <p>{{year}}</p>
      </div>
    </div>
  </script>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.4.2/handlebars.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>