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
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script type="text/javascript">
            function validaCadastro(){
              let confirma_senha = document.getElementById('confirma_senha')
              let senha = document.getElementById('senha')
              let email = document.getElementById('email')
              let nome = document.getElementById('nome')
              let bimestre = document.getElementById('bimestre')
              let form = document.getElementById('form')
              
              if(nome.value == ''){
                alert('Preencha o nome');
              }else if(email.value == ''){
                alert('Preencha o email');
              }else if(!email.value.match(/@aluno.univesp.br/)){
                    alert('Insira um email Univesp válido');
              }else if(bimestre.value == ''){
                alert('Preencha o bimestre');
              }else if(senha.value == ''){
                alert('Preencha a senha');
              }else if(confirma_senha.value == ''){
                alert('Confirme sua Senha');
              }else if(senha.value != confirma_senha.value){
                alert('A senha precisa ser igual');
              }else {
                form.action = "valida_login.php?acao=1"
                form.submit();
              }
            }
         </script>
        
         <style>
               .card-login {
                    padding: 30px 0 0 0;
                    width: 550px;
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
                                        Cadastre-se
                                   </div>
                                   <div class="card-body">
                                        <form id="form"  method="post">
                                              <div class="form-group">
                                                  <input id="nome" type="text" class="form-control" placeholder="Nome" name="nome">
                                             </div>
                                             <div class="form-group">
                                                  <input id="email" type="email" class="form-control" placeholder="E-mail" name="email">
                                             </div>
                                             <div class="form-group">
                                                  <select id="bimestre" class="form-control" name="bimestre">
                                                    <option value="">Bimestre</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                  </select>
                                             </div>
                                             <div class="form-group">
                                                  <input id="senha" type="password" name="senha" class="form-control" placeholder="Senha">
                                             </div>
                                             <div class="form-group">
                                                  <input id="confirma_senha" type="password" name="senha" class="form-control" placeholder="Confirma Senha">
                                             </div>
                                            
                                             <button onclick="validaCadastro()"  type="" class="btn btn-lg btn-block"  style="
                                             background-color: #B45F04;color: black">Cadastrar</button>
                                             <p class="text-right pt-1"><a href="index.php" class="text-dark">Voltar</a></p>
                                        </form>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>