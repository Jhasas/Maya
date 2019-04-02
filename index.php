<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TCC</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <!-- CSS do Index -->
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>

  <header>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark blue-gradient fixed-top scrolling-navbar">


      <!-- LOGO -->
      <a class="navbar-brand" href="home.php">Navbar</a>

      <!-- Botão para Mostrar e Recolher o NAVBAR no Mobile -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


    <div class="collapse navbar-collapse" id="navbarNav">
        
        <!-- Links -->
        <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
                <a class="nav-link" href="#como-funciona">Como funciona?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#serviços">Serviços</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cadastro-empresa">Cadastre sua Empresa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contato">Contato</a>
            </li>
        </ul>
        <!-- Links -->



            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLRForm">Entre ou Cadastre-se</button>

            


    </div>
    <!-- FIM Lista de Itens -->

    </nav>
    <!-- FIM NAVBAR -->


<!--Mask-->
<div id="intro" class="view">

    <div class="mask rgba-black-light">

        <div class="container-fluid d-flex align-items-center justify-content-center h-100">

            <div class="col-lg-5 col-md-12">

                  <form class="p-5 white-text needs-validation" name="cep" novalidate>
                    <div class="md-form form-sm"><i class="fas fa-map-marker-alt prefix"></i>
                      <input type="text" id="validationCustom01" class="form-control form-control-sm white-text" required>
                      <label for="validationCustom01 white-text" >Digite seu CEP</label>
                    </div>
                    
                    <div class="text-center mt-4">
                      <a href="javascript: submitform();"><button class="btn btn-primary">BUSCAR <i class="far fa-paper-planeml-1"></i></button></a>
                    </div>
                  </form>
                  
                  <div class="text-center">
                    <button type="button" class="btn btn-outline-primary waves-effect" data-toggle="modal" data-target="#exampleModal">NÃO SEI MEU CEP</button>
                  </div>  


                  

                </div>
            </div>
        </div>
    </div>
</div>
    <!-- FIM Mask-->
   
  </header >

  
<!--Main layout-->
<main class="mt-5" >
    <div class="container">

        <!--Section: COMO FUNCIONA-->
        <section id="como-funciona" class="text-center" >

          <!-- Heading -->
          <h2 class="mb-5 font-weight-bold">Como Funciona</h2>

          <!--Grid row-->
          <div class="row d-flex justify-content-center mb-4">

              <!--Grid column-->
              <div class="col-md-8">

                  <!-- Descrição -->
                  <h5>Busque empresas qualificadas para resolver um problema doméstico, sem a necessidade de sair de casa.</h5>

              </div>
              <!--Grid column-->

          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">

              <!--Grid column-->
              <div class="col-md-4 mb-1" >
                  <i class="far fa-grin-beam fa-4x blue-text"></i>
                  <h4 class="my-4 font-weight-bold">Facilidade</h4>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                      assumenda deleniti hic.</p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-4 mb-1">
                  <i class="fas fa-user-lock fa-4x blue-text"></i>
                  <h4 class="my-4 font-weight-bold">Segurança</h4>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                      assumenda deleniti hic.</p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-4 mb-1">
                  <i class="far fa-clock fa-4x blue-text"></i>
                  <h4 class="my-4 font-weight-bold" >Rapidez</h4>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                      assumenda deleniti hic.</p>
              </div>
              <!--Grid column-->

          </div>
          <!--Grid row-->

        </section>
        <!--Section: COMO FUNCIONA-->


        <hr class="my-5">

        <!--Section: Serviços-->
        <section id="serviços" class="text-center">

          <!-- Heading -->
          <h2 class="mb-5 font-weight-bold">Serviços</h2>
          

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4">

              <div class="view overlay z-depth-1-half">
                <img src="img/senna.jpg" class="img-fluid">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <h4 class="my-4 font-weight-bold">Carros</h4>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                aperiam minima
                assumenda deleniti hic.</p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">

              <div class="view overlay z-depth-1-half">
                <img src="img/marcenaria.jpg" class="img-fluid">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <h4 class="my-4 font-weight-bold">Marcenaria</h4>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                aperiam minima
                assumenda deleniti hic.</p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">

              <div class="view overlay z-depth-1-half">
                <img src="img/concertos.jpg" class="img-fluid">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <h4 class="my-4 font-weight-bold">Concertos</h4>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                aperiam minima
                assumenda deleniti hic.</p>

            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </section>
        <!--Section: Serviços-->

        <hr class="my-5">


        <!--Section: Empresas-->
        <section id="cadastro-empresa">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">Empresas</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                  <!--Carousel Wrapper-->
                  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                      <!--First slide-->
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="https://cdn11.bigcommerce.com/s-912c5/product_images/uploaded_images/microsoft-banner.jpg" alt="First slide">
                      </div>
                      <!--/First slide-->
                      <!--Second slide-->
                      <div class="carousel-item">
                        <img class="d-block w-100" src="http://static1.gamespot.com/uploads/original/1509/15094575/2831326-9826454141-25905.jpg" alt="Second slide">
                      </div>
                      <!--/Second slide-->
                      <!--Third slide-->
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://media.cdn.gradconnection.com/uploads/7bae1202-5f75-42af-957d-4d6fed98f2b5-Google-Logo.png" alt="Third slide">
                      </div>
                      <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                  </div>
                  <!--/.Carousel Wrapper-->

                </div>
                <!--/.Grid column-->

                <!--Grid column-->
                <div class="col-md-6">

                    <!--Excerpt-->
                    <a href="" class="teal-text">
                        <h6 class="pb-1"><i class="fas fa-heart"></i><strong> Lifestyle </strong></h6>
                    </a>
                    <h4 class="mb-3"><strong>This is title of the news</strong></h4>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
                        debitis aut rerum.</p>

                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
                        debitis aut rerum.</p>
                    <p>by <a><strong>Jessica Clark</strong></a>, 26/08/2016</p>
                    <a class="btn btn-primary btn-md">Read more</a>

                </div>
                <!--/.Grid column-->

            </div>
            <!--/.Grid row-->

        </section>
        <!--Section: Gallery-->


        <hr class="my-5">


        <!--Section: Contact-->
        <section id="contato">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">Contate-nos</h2>

            <!--Grid row-->
            <div class="row">

            <!--Grid column-->
            <div class="col-lg-12">

              

                <?php include "forms/contato.php" ?>


            </div>
            <!--Grid column-->


            </div>
            <!--Grid row-->

        </section>
        <!--Section: Contact-->

    </div>

  </main>
  <!--Main layout-->


  <!-- Footer -->
  <footer class="page-footer font-small unique-color-dark pt-4">

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Company name</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Products</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">MDBootstrap</a>
                </p>
                <p>
                    <a href="#!">MDWordPress</a>
                </p>
                <p>
                    <a href="#!">BrandFlow</a>
                </p>
                <p>
                    <a href="#!">Bootstrap Angular</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Useful links</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">Your Account</a>
                </p>
                <p>
                    <a href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a href="#!">Shipping Rates</a>
                </p>
                <p>
                    <a href="#!">Help</a>
                </p>
            </div>
            <!--/.Third column-->

        </div>
    </div>
    <!--/.Footer Links-->

   

  </footer>
  <!-- Footer -->

  <!-- /Start your project here-->

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

  <script type="text/javascript" src="js/cidade.js"></script>

  <!-- Carousel options -->
  <script>
    $('.carousel').carousel({
      interval: 3000,
    });

  </script>





<?php 

//modal login
include "forms/login.php";

include "forms/nao_sei_cep.php";

?>



</body>

</html>



