
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Cover Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-2 mx-auto flex-column ">
 
    <div class="inner mb-5">
      <h3 class="masthead-brand">Fuckyoumoney</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Savings</a>
     
      </nav>
    </div>
  
    <div class="inner cover">

    <h1 class="text-md-left">Calculate your savings:</h1>
    <div class="inner cover bgcolor p-3 text-md-left">
       
        <div class="container">
        <form  method="GET" action="/acalc" class="form-group">
            <label for="principal">Principal Amount</label>
            <input class="form-control form-control-lg" type="number" name="principal" id="principal" value="0"><br>
            <label for="interest">Anual interest rate</label>
            <input class="form-control form-control-lg" type="number" name="interest" id="interest" value="0"><br>
            <label for="years">number of years</label>
            <input class="form-control form-control-lg" type="number" name="years" id="years" value="0"><br>
            <label for="add">Additional yearly savings</label>
            <input class="form-control form-control-lg" type="number" name="add" id="add" value="0"><br>
            <input type="submit" class="btn btn-warning">
        </form>
        </div> 
    </div>
    
    <?php 
        if(isset($_GET['principal']))
        
        {
            include_once('inc/resultView.php');
        }
    
    ?>
    </div>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    </div>
  </footer>
</div>
</body>
</html>
