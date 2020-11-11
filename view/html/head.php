<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style-principal.css">
    <script
      src="http://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <title>Calendrier de l'avent</title>
</head>
<body>
<?php 

  if(isset($_SESSION["background"])){
    echo '<body  style="background-image:url(public/image/'.$_SESSION["background"].'.jpg)">';
  }else{
    echo '<body style="background-image:url(public/image/background.jpg)">';
  }
?>
    
