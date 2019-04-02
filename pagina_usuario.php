<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Adaptação para Mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Sidenav CSS-->
  <link rel="stylesheet" type="text/css" href="css/sidenav.css">

  <!-- Conteudo CSS -->
  <link rel="stylesheet" type="text/css" href="css/conteudo.css">

  <!-- Pagina do Usuário CSS -->
  <link rel="stylesheet" type="text/css" href="css/pagina_usuario.css">

  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

  
<!-- MOBILE -->
<!-- <div  id="mobile">  
      
      <nav class="navbar navbar-expand-lg stylish-color">

        <div class="chip">
            <img src="img/1.png" alt="Person" width="96" height="96">
            John 117
        </div>                          
        
        <button type="button" class="btn-md btn-primary btn">Editar Perfil</button>

  
</div> -->




<!-- DESKTOP -->
<div id="conteudo">
  <div class="container fullscreen z-depth-1-half" id="desktop">  

    <div class="row ">
   

      <div class="col-12">


        <div class="row blue darken-1">

          <div class="col-12">
          
             <nav class="navbar">

            <div class="card-deck">
              <div id="card-1" class="card">
                <div class="avatar mx-auto white">
                  <img src="img/1.png" class="rounded-circle" alt="Sample avatar image." width="65" height="65">
                </div>
                <h4 class="font-weight-bold mb-3 card-text">John 117</h4>
              </div>
            </div>
                              
              
              <button type="button" class="btn-md btn-primary btn" data-toggle="modal" data-target="#modalEditarPerfil">Editar Perfil</button>

              <?php include "forms/editar_perfil.php"; ?>

                        
            </nav>

          </div>

        </div>
 
        <div class="row">
          <div class="col-3" >
            
             <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-1-list" data-toggle="list" href="#list-1"
                  role="tab" aria-controls="1"><i class="fas fa-user-cog prefix"></i> Configurações</a>
                <a class="list-group-item list-group-item-action" id="list-2-list" data-toggle="list" href="#list-2"
                  role="tab" aria-controls="2"><i class="fas fa-check-double prefix"></i> Ativar Conta</a>
                <a class="list-group-item list-group-item-action" id="list-3-list" data-toggle="list" href="#list-3"
                  role="tab" aria-controls="3"><i class="fas fa-user-tie prefix"></i> Ultimos Contratos</a>
                <a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list" href="#list-4"
                  role="tab" aria-controls="4"><i class="fas fa-envelope-open-text prefix"></i> Envie uma Reclamação</a>
              </div>

          </div>

          <div class="col-9">

          <div class="tab-content" id="nav-tabContent">  
            
            <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-1-tab">

             <h4>Configurações</h4>
             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

            </div>

            <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-2-tab">

              <h2 class="mt-3 font-weight-bold text-center">Ativar Conta</h2>
                <?php include "forms/ativar_conta.php" ?>

            </div>

            <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-3-tab">
               <h4>Ultimos Contratos</h4>
               <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>

            <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-4-tab">

              <h2 class="mt-3 font-weight-bold text-center">Contato</h2>
              <?php include "forms/contato.php"; ?>

            </div>

          </div>

          </div>
        </div>

      </div>

    

    </div>

  </div>

</div>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>


 <script type="text/javascript" src="js/validar.js"></script>
</body>
</html>