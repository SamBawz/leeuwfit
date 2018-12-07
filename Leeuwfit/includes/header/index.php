<header>
  <?php error_reporting(E_ALL & ~E_NOTICE);?>
  <link href="/leeuwfit/includes/header/index.css" rel="stylesheet">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
  <a class="navbar-brand" href="/leeuwfit/index.php">
    <img alt="Brand" src="/leeuwfit/includes/css/img/sport brand.png">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($page === "home") {echo "active";} ?>">
        <a class="nav-link" href="/leeuwfit/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if ($page === "activities") {echo "active";} ?>">
        <a class="nav-link" href="/leeuwfit/activities/index.php">Activiteiten</a>
      </li>
      <li class="nav-item <?php if ($page === "agenda") {echo "active";} ?>">
        <a class="nav-link" href="/leeuwfit/agenda/index.php">Agenda</a>
      </li>
      <li class="nav-item <?php if ($page === "contact") {echo "active";} ?>">
        <a class="nav-link" href="/leeuwfit/contact/index.php">Contact</a>
      </li>
      <li class="nav-item <?php if ($page === "news") {echo "active";} ?>">
        <a class="nav-link" href="/leeuwfit/news/index.php">News</a>
      </li>
    </ul>
     <?php
    session_start();
    if ($_SESSION['user']) {
      echo '<a class="nav-link" href="/leeuwfit/account/index.php">Account</a>'; //.$_SESSION['user'].'</a>';
    }
    else {
      echo 
      '<div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form action="/leeuwfit/includes/db/login.php" method="post">
              <input class="dropdown-item" type="text" name="name" placeholder="Username" required/>
              <input class="dropdown-item" type="password" name="password" placeholder="Password" required/>
              <div class="dropdown-divider"></div>
              <input class="dropdown-item" type="submit" name="login" value="Login" />
            </form>
        </div>
      </div>'; 
    } ?>
  </div>
</nav>
  
  
  
  
  
  
<!--
  <nav class="navbar navbar-expand-lg navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="../includes/css/img/soccer-ball.png">
      </a>
      </div>
    
     Collect the nav links, forms, and other content for toggling 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php //if ($page === "home") {echo "class=active";} ?>><a href="../../index.php">Home</a></li>
        <li <?php //if ($page === "activities") {echo "class=active";} ?>><a href="../../activities/index.php">Activiteiten</a></li>
        <li <?php //if ($page === "agenda") {echo "class=active";} ?>><a href="#">Agenda</a></li>
        <li <?php //if ($page === "contact") {echo "class=active";} ?>><a href="#">Contact</a></li>
        <li <?php //if ($page === "news") {echo "class=active";} ?>><a href="#">Nieuws</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <form action="" method="post">
              <li><label>Username:</label></li>
              <li><input type="text" name="name" placeholder="Username" required/></li>
              <li><label>Password:</label></li>
              <li><input type="password" name="password" placeholder="Password" required/></li>
              <li role="separator" class="divider"></li>
              <li><input type="submit" name="login" value="Login" /></li>
            </form>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  </nav>
-->
</header>