<?php
     if(!isset($_GET['erro'])){
     $_GET['erro'] = 0;
}

?>

<!doctype html>
<html lang="pt-br">
     <head>
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

         <link rel="stylesheet" type="text/css" href="css/estilos.css">

         <!--Fonts Awesome -->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
          <?php
         error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
         if($_GET['sucess'] == 1){


         ?>
         <script type="text/javascript">
           alert('Cadastro efetuado com sucesso')
         </script>
         <?php
         }
         ?>
         <style>
               .card-login {
                    padding: 30px 0 0 0;
                    width: 350px;
                    margin: 0 auto;
               }
         </style>
          <title>Mundo Univesp</title>
     </head>
     <body>
          <header  id="cabecalho" class=""><!-- Inicio cabecalho-->
               <div class="container ">
               <nav class="navbar navbar-dark row"> 
                    <!--logo-->
                    <div class=" col-12 text-center">
                         <h1><a href="index.php" class="text-light" style="text-decoration: none;">Mundo <span>Univesp</span></a></h1>
                    </div>   
          </header>

          <section class="pt-2">
               <div class="container">    
                    <div class="row">
                         <div class="card-login">
                              <div class="card">
                                   <div class="card-header" style="background-color: #29220A;color:white;">
                                        Login
                                   </div>
                                   <div class="card-body">
                                        <form action="valida_login.php?acao=0" method="post">
                                             <div class="form-group">
                                                  <input type="email" class="form-control" placeholder="E-mail" name="email">
                                             </div>
                                             <div class="form-group">
                                                  <input type="password" name="senha" class="form-control" placeholder="Senha">
                                             </div>
                                             <?php
                                                  if($_GET['erro'] == 1){
                                             ?>
                                             <span class="text-danger">Usuário ou senha inválidos</span>
                                             <?php
                                             }
                                             ?>  <?php
                                                  if($_GET['erro'] == 2){
                                             ?>
                                             <span class="text-danger">Faça o Login no Sistema</span>
                                             <?php
                                             }
                                             ?>

                                             <button type="submit" class="btn btn-lg btn-block"  style="
                                             background-color: #B45F04;color: black">Entrar</button>
                                             <p class="text-right pt-1"><a href="cadastro.php" class="text-dark">Cadastre-se</a></p>
                                        </form>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>