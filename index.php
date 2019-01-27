<?php
$alert ="";
if (isset($_POST["submit"])) {
  $slen =$_POST["sepal_length"];
  $swid =$_POST["sepal_width"];
  $plen =$_POST["petal_length"];
  $pwid =$_POST["petal_width"];
  $output = shell_exec("python qwerty.py ".$slen." ".$swid." ".$plen." ".$pwid);
  $a =json_decode($output);
  $flower_name= "not found" ;
  switch ($a[0]) {
    case '0':
      $flower_name ="setosa";
      break;
      case '1':
        $flower_name ="versicolor";
      break;
      case '2':
        $flower_name ="virginica";
      break;
    default:
      // code...
      break;
  }
  $alert ="<div class='alert alert-success'> The Flower is <b>".
            $flower_name
            ."</b></div>";
}
?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>Machine Learning Implementat</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <a class="navbar-brand" href="/phppy">ML flower recognition</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">More</a>
          </li>
        </ul>
      </div>
    </nav>
    <main class="px-2">

        <div class="card col-lg-4 mx-auto mt-3 px-0">
          <div class="card-header bg-info">
            <span class="lead text-light">ML Flower Identifier.</span>
          </div>
          <div class="card-body">
            <form class="" action="" method="post">
              <?php echo $alert; ?>
              <div class="form-group">
                <label>Sepal length</label>
                <input type="number" class="form-control form-control-sm" name="sepal_length" placeholder="Sepal length" required autocomplete="off">
              </div>
              <div class="form-group">
                <label>Sepal width</label>
                <input type="number" class="form-control form-control-sm" name="sepal_width" placeholder="Sepal width" required autocomplete="off">
              </div>
              <div class="form-group">
                <label>Petal length</label>
                <input type="number" class="form-control form-control-sm" name="petal_length" placeholder="Petal length" required autocomplete="off">
              </div>
              <div class="form-group">
                <label>Petal width</label>
                <input type="number" class="form-control form-control-sm" name="petal_width" placeholder="Petal width" required autocomplete="off">
              </div>
              <input type="submit" name="submit"class="btn btn-outline-info w-100">
            </form>
          </div>
        </div>

    </main>
  </body>
</html>
