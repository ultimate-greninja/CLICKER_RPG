<?php
$cookieName = "userId";
if (!isset($_COOKIE[$cookieName]) || empty($_COOKIE[$cookieName])) {
  setcookie("weaponRarity","",time()-86400000);
  setcookie("typeStore","",time()-86400000);
  setcookie("weaponPower","",time()-86400000);
  setcookie("attackSpeed","",time()-86400000);
  setcookie("weaponDurability","",time()-86400000);
  setcookie("effect","",time()-86400000);
  setcookie("curse","",time()-86400000);
  setcookie("worthyness","",time()-86400000);
  setcookie("sellPrice","",time()-86400000);
  setcookie("weaponName","",time()-86400000);
  setCookie("maxUserHealth","",time()-86400000);
  setCookie("userHealth","",time()-86400000);
  setCookie("gold","",time()-86400000);
  setCookie("userLv","",time()-86400000);
  setCookie("exp","",time()-86400000);
  setCookie("amountPulled","",time()-86400000);
  header("location:titleScreen.php");
}
$userId = $_COOKIE["userId"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mystyles.css">
    <title>Clicker RPG</title>
</head>
<body id = "textChange">
<!-- bootstrap -->
  <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="character.php">
      <img src="img/placeholder.png" style = "width:50%; height:50%;" alt="Logo" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="character.php">Character</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Forging.php">Forging</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inventory
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" aria-current="page" href="weaponInventory.php">Weapons</a></li>
            <li><a class="dropdown-item" aria-current="page" href="armourInventory.php">Armour</a></li>
            <li><a class="dropdown-item" aria-current="page" href="ForgingMaterialsInventory.php">Forging Materials</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="logout.php">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>