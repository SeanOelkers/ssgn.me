<?php
function checkDateTime($x) {
    return (date('Y-m-d', strtotime($x)) == $x);
}
if(isset($_GET['date']) && checkDateTime($_GET['date'])) {
  $theDate = $_GET['date'];
} else {
  $theDate = date('Y-m-d');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Sean Oelkers">
    <link rel="icon" href="/assets/img/favicon.ico">

    <title>ssgn.me</title>

    <!-- core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh6PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/assets/css/ssgn.css" rel="stylesheet">
  </head>

  <body>

<?php include($_SERVER['DOCUMENT_ROOT']."/includes/nav.php");?>

    <main role="main" class="container">

      <div class="starter-template">
          <h1 class='text-muted'>a<strong class='text-success'>ss</strong>i<strong class='text-warning'>gn</strong>ed to <strong class='text-danger'>me</strong></h1>
      </div>

      <div class='row'>

        <div class='col-lg-4'>
          <h5 class='text-center'><? echo date('l, M jS',strtotime($theDate)) ?></h5>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-primary'>Algebra II</h6>
            <div class="card-body">
              <p class='card-text'>Toby wuz here...</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-info'>European History</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-success'>Spanish</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-warning'>Figure Drawing</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-danger'>Mac onomics</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
        </div>

        <div class='col-lg-4'>
          <h5 class='text-center'><? echo date('l, M jS',strtotime($theDate." +1 day")) ?></h5>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-primary'>Algebra II</h6>
            <div class="card-body">
              <p class='card-text'>Toby wuz here...</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-info'>European History</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-success'>Spanish</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-warning'>Figure Drawing</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-danger'>Macro Economics</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
        </div>

        <div class='col-lg-4'>
          <h5 class='text-center'><? echo date('M jS',strtotime($theDate." +2 day")) ?> - <? echo date('M jS',strtotime($theDate." +1 week")) ?></h5>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-primary'>Algebra II</h6>
            <div class="card-body">
              <p class='card-text'>Toby wuz here...</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-info'>European History</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-success'>Spanish</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-warning'>Figure Drawing</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
          <div class="card mb-3">
            <h6 class='card-header text-white bg-danger'>Macro Economics</h6>
            <div class="card-body">
              <p class='card-text'>This is some text within a card body.</p>
            </div>
          </div>
        </div>

      </div>



    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
