<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <link href="/leeuwfit/includes/css/index.css" rel="stylesheet">
  <meta charset="utf-8">
  <title>Leeuwfit - Activiteiten</title>
</head>
<body>
  <?php 
  $page=null; 
  include_once '../includes/header/index.php';?>
  <div id="content">
    <div class="row">
      <div class="col-lg-12">
        <form action="/leeuwfit/includes/db/logout.php" method="post">
          <input type="submit" value="Afmelden"/>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <label>hey <?php echo $_SESSION['user'];?></label>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5">
        <label>Wachtwoord:</label>
      </div>
      <div class="col-lg-7">
        <input type="password"/>
      </div>
    </div>
  </div>
</body>
</html>