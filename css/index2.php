<!DOCTYPE html>
<?php

  ini_set('display_errors', 1);
  require 'steamauth/steamauth.php';

  if (isset($_SESSION['steamid'])) {
    include ('steamauth/userInfo.php'); //To access the $steamprofile array
  }

?>
<html>
  <head>
    <meta charset="utf-8">
    <title>JafixBot - Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <!-- navbar -->
    <nav class="customnavbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbarbg navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://jafixbot.com">JafixBot<small>.com</small></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bots
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">JafixBot1</a></li>
                <li><a href="#">JafixBot2</a></li>
                <li><a href="#">JafixBot3</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Social
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://steamcommunity.com/groups/jafixbot">Steam Group</a></li>
                <li><a href="https://discord.gg/nRvkCGu">Discord Server</a></li>
              </ul>
            </li>
            <li><a href="#">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if (!isset($_SESSION['steamid'])) :?>
                <div class"align-middle"><?php loginbutton('rectangle'); ?></div>
            <?php endif; ?>
            <?php if (isset($_SESSION['steamid'])) :?>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><div class="align-middle"><img src="<?php echo $steamprofile['avatar'];?>" alt="Avatar"></div>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo $steamprofile['profileurl'];?>"><?php echo $steamprofile['personaname']; ?></a></li><br/>
                  <li><a href="#"><?php echo logoutbutton(); ?></a></li>
                </ul>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- content -->
    <div class="container">
      <div class="col-lg-12">
        <div class="welcomebrnd">
          <h1>JafixBot</h1>
          <p>Extremely Fast Trading Services</p>
        </div>

        <div class="getstarted">
          <h1 class='size45px'>Get Started</h1>
          <div class="bot">
            <h1>JafixBot1</h1>
            <p>Cards ⇄ Cards</p>
            <button type="button" class="botbtn">Info</button>
            <button type="button" class="botbtn">Profile</button>
            <button type="button" class="botbtn">Trade link</button>
          </div><br/>
          <div class="bot">
            <h1>JafixBot2</h1>
            <p>X ⇄ X</p>
            <button type="button" class="botbtn">Info</button>
            <button type="button" class="botbtn">Profile</button>
            <button type="button" class="botbtn">Trade link</button>
          </div><br/>
          <div class="bot">
            <h1>JafixBot3</h1>
            <p>CS:GO keys ⇄ TF2 keys</p>
            <button type="button" class="botbtn">Info</button>
            <button type="button" class="botbtn">Profile</button>
            <button type="button" class="botbtn">Trade link</button>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
