
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <!-- Adaptação para Mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Link para o Css da página inicial-->
  <link rel="stylesheet" type="text/css" href="css/index.css">

  <!-- Link para o Css do Footer-->
  <link rel="stylesheet" type="text/css" href="css/footer.css">

  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> 

  </head>

  <body>

<!-- CABEÇALHO DA PÁGINA (Celular)-->
 <div  class="header-celular">

  <!-- Botão para abrir o Menu Lateral -->
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
   
   <!-- BARRA DE NAVEGAÇÃO LATERAL -->
   <div id="mySidenav" class="sidenav">

        <!-- Botão pra fechar menu lateral -->
        <span href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</span>

        <!-- Conteúdo do menu lateral -->
        <a href="#" name="login">Entre ou Cadastre-se</a>
        <a href="#" name="sobre"> Sobre </a>
        <a href="#" name="cadastre-sua-empresa"> Cadastre sua Empresa </a>
        <a href="#" name="contato"> Contato </a>
        
    </div>
    <!-- FIM DA BARRA DE NAVEGAÇÃO LATERAL -->


 </div>
<!-- FIM DO CABEÇALHO -->


  	
<!-- CABEÇALHO DA PÁGINA (Desktop)-->
 <div class="header-desktop">
 	<div class="grid-container-column">
   
    <!-- Coluna Canto Esquerdo - LOGO -->
 		<div class="logo">
 			<a href="home.php" > LOGO </a>
 		</div>

    <!-- Coluna Centro - INFORMAÇÕES -->
 		<div class="info">
 			<a href="#" name="sobre"> Sobre </a>
 			<a href="#" name="cadastre-sua-empresa"> Cadastre sua Empresa </a>
      <a href="#" name="contato"> Contato </a>
 		</div>

    <!-- Coluna Canto Direito - LOGIN -->
 		<div class="login">
 			<a href="#" name="login">Entre ou Cadastre-se</a>
 		</div>

 	</div>
 </div>
<!-- FIM DO CABEÇALHO -->





<!-- CORPO DA PÁGINA HOME  -->
<div class="corpo">
 	<div class="grid-container-row">

 		<div class="centro">

      <!-- Formulario de envio da localização do usuário -->
      <form class="form-inline">

        <!-- Campo de texto e botão em Bootstrap -->
        <div class="form-group mx-sm-3 mb-2">

          <label class="sr-only">Digite seu CEP</label>
          <input type="text" class="form-control" placeholder="Digite seu CEP">

        </div>

        <!-- Botão de envio do formulário -->
        <button type="submit" class="btn btn-primary mb-2">Buscar</button>

      </form>

      <!-- Caso o usuário não saiba seu CEP um MODAL sera aberto -->
      <span data-toggle="modal" data-target="#exampleModal">Não sei meu CEP</span> 



      <!-- INICIO MODAL -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">

            <!-- Cabeçalho do Modal -->
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Não sei meu CEP</h5>
            </div>
            <!-- Fim Cabeçalho do Modal -->

            <!-- Corpo do Modal -->
            <div class="modal-body">
              
                    <!-- Formulário do Endereço -->
                    <form>
                      <div class="form-row">
                        <div class="form-group col-md-4">

                          <!-- Selecionar o Estado -->
                          <label class="sr-only">Estado</label>
                          <select id="inputEstado" class="form-control">
                            <option selected>PR</option>
                            <option>         RJ</option>
                            <option>         SP</option>
                          </select>

                        </div>

                        <div class="form-group col-md-8">

                          <!-- Selecionar a Cidade -->
                          <label class="sr-only">Cidade</label>
                          <select id="inputCidade" class="form-control">
                            <option selected>Campina Grande do Sul</option>
                            <option>Curitiba</option>
                            <option>Quatro Barras</option>
                          </select>

                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-10">

                          <!-- Digitar o Endereço -->
                          <label class="sr-only">Endereço</label>
                          <input type="text" class="form-control" id="inputEndereco" placeholder="Endereço">

                        </div>

                        <div class="form-group col-md-2">

                          <!-- Digitar o Número -->
                          <label class="sr-only">Número</label>
                          <input pattern="[0-9]+$" class="form-control" id="inputNumero" placeholder="Nº">

                        </div>
                      </div>

                    <!-- Botão de envio do formulário --> 
                    <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                    </form>
                    <!-- Fim do Formulário do Endereço -->

            </div>
            <!-- Fim do Corpo do Modal -->

            <!-- Rodapé do Modal -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            </div> 
            <!-- Rodapé do Modal -->

          </div>
        </div>
      </div>
      <!-- FIM INICIO MODAL -->
   

    </div>
 	</div>
</div>
 <!-- FIM DO CORPO -->

 <?php include_once("footer.php"); ?>

  <!-- Script para abrir menu lateral mobile -->
  <script src="js/home.js"></script>
  </body>

</html>