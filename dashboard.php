<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<html>
<title>StockBlox - Dashboard</title>
<!-- CSS only -->
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">StockBlox</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="credits.php">Credits</a>
         <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="games.php">Games</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div id="header">
    <img id="logo" src="https://static.wikia.nocookie.net/da-hood-roblox/images/d/d6/Passive.png" alt="Avatar" style="border:1px solid black;">
</div>

<h3>Ahoy, <?php echo $_SESSION['username']; ?>!</h3>



</body>