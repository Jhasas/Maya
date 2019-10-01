<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">

      <!-- Adaptação para Mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Sidenav CSS-->
      <link rel="stylesheet" type="text/css" href="css/sidenav.css">


      <!-- Conteudo CSS -->
      <link rel="stylesheet" type="text/css" href="css/conteudo.css">

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
      <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="{{ asset('js/all.js') }}" defer></script>

      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> 

      <!-- Load icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Material Design Bootstrap -->
      <link href="css/mdb.min.css" rel="stylesheet">

</head>
<body>

<?php 

     include "conteudo.php"; 

     include "navbar.php";

     include "sidenav.php";

     include "forms/login.php";

?>




 <script type="text/javascript" src="js/validar.js"></script>
</body>
</html>
