<!doctype html>
<html>
<head>
<!--
  <link href="includes/bootstrap-4.1.3-dist/css/bootstrap.css">
  <script src="includes/bootstrap-4.1.3-dist/js/bootstrap.js"></script>
-->
  <!-- cached versions of bootstrap and js -->
<!--
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <link href="includes/css/index.css" rel="stylesheet">
  <meta charset="utf-8">
  <title>Leeuwfit - Home</title>
</head>
<body>
  <?php 
  $page = "home";
  include_once 'includes/header/index.php';?>
  <div id="content" style="padding-top: 55px;">
    <div id="carousel" class="page">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="includes/css/img/christopher-burns-200321-unsplash.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="includes/css/img/tamarcus-brown-158860-unsplash.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="includes/css/img/nil-castellvi-309295-unsplash.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div id="about" class="page">
	<!--Content first paralax image-->
	<div class="container">
	<div class="row">
		<div class="container">
	<div class="row">
	    <div class="col-md-4">
    		<div class="card mb">
              <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
              <div class="card-body mb">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary mb">button</button>
              </div>
            </div>
        </div>
        <div class="col-md-4">
    		<div class="card mb">
              <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
              <div class="card-body mb">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary mb">button</button>
              </div>
            </div>
        </div>
        <div class="col-md-4">
    		<div class="card mb">
              <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
              <div class="card-body mb">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary mb">button</button>
              </div>
            </div>
        </div>
	</div>
	<!--End content first paralax image-->
</div>
	</div>
</div>



    </div>
      <div id="extra" class="page">
      </div>
      <div id="extra2" class="page">
      </div>
  </div>
</body>
</html>