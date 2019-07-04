<?php
session_start();
    if($_SESSION['autoriza_login'] <> 1){
        header('Location:login.php?erro=2');
    }

?>
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
            <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
         <script type="text/javascript">
            function validaCadastro(){
              let tipo_conteudo = document.getElementById('tipo_conteudo')
              let conteudo_univesp = document.getElementById('conteudo_univesp')
              let titulo = document.getElementById('titulo')
              let url = document.getElementById('url')
              let curso = document.getElementById('curso')
              let bimestre = document.getElementById('bimestre')
              let disciplina = document.getElementById('disciplina')
              let semana = document.getElementById('semana')
              
              if(tipo_conteudo.value == ''){
                alert('Selecione o tipo de conteudo');
              }else if(conteudo_univesp.value == ''){
                alert('Verifique se o conteúdo é Univesp');
              }else if(titulo.value == ''){
                    alert('Insira um título');
              }else if(url.value == ''){
                alert('Insira uma url');
              }else if(curso.value == ''){
                alert('Selecione o curso');
              }else if(bimestre.value == ''){
                alert('Selecione o bimestre');
              }else if(disciplina.value == ''){
                alert('selecione uma disciplina');
              }else if(semana.value == ''){
                alert('selecione uma semana');
              }else {
                form.action = "valida_login.php?acao=2"
                form.submit();
              }
            }

            function consulta_disciplina(){
                var bimestre = $('#bimestre').val();

                $.getJSON('consulta_disciplina.php?bimestre='+bimestre, function (dados){
                  var option = '<option>Selecione a Disiciplina</option>';
                  $.each(dados, function(i, obj){
                  option += '<option value="'+obj.id_disciplina+'">'+obj.disciplina_nome+'</option>';
                  })
                  $('#disciplina').html(option).show();
                })

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
                         <h1><a href="home.php" class="text-light" style="text-decoration: none;">Mundo <span>Univesp</span></a></h1>
                    </div>   
          </header>

          <section class="pt-2">
               <div class="container">    
                    <div class="row">
                         <div class="card-login">
                              <div class="card">
                                   <div class="card-header text-center" style="background-color: #29220A;color:white;">
                                        Cadastre o seu conteúdo
                                   </div>
                                   <div class="card-body">
                                        <form id="form"  method="post">
                                              <div class="form-group">
                                                  <select id="tipo_conteudo" class="form-control" name="tipo_conteudo">
                                                    <option value="">Tipo do conteúdo</option>
                                                    <option value="1">Video</option>
                                                    <option value="2">Documento</option>    
                                                  </select>
                                                </div>
                                                <div class="form-group">
                                                  <select id="conteudo_univesp" class="form-control" name="conteudo_univesp">
                                                    <option value="">Conteúdo Univesp</option>
                                                    <option value="1">Sim</option>
                                                    <option value="0">Não</option>    
                                                  </select>
                                                </div>
                                              <div class="form-group">
                                                  <input id="titulo" type="text" class="form-control" placeholder="Titulo" name="titulo">
                                             </div>
                                             <div class="form-group">
                                                  <input id="url" type="url" class="form-control" placeholder="URL" name="url">
                                             </div>
                                             <div class="form-group">
                                                  <select id="curso" class="form-control" name="curso">
                                                    <option value="">Curso</option>
                                                    <option value="1">Engenharia Ciclo Básico</option>
                                                    <option value="2">Computação</option>
                                                    <option value="3">Produção</option>
                                                  </select>
                                             </div>
                                              <div class="form-group">
                                                  <select id="bimestre" class="form-control" name="bimestre" onchange="consulta_disciplina()">
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
                                                   <select id="disciplina" class="form-control" name="disciplina">
                                                    <option value="">Disciplina</option>
                                                  </select>
                                             </div>
                                            
                                             
                                             <div class="form-group">
                                                  <select id="semana" class="form-control" name="semana">
                                                    <option value="">Semana</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                  </select>
                                             </div>
                                             </div>
                                            
                                             <button onclick="validaCadastro()"  type="" class="btn btn-lg btn-block"  style="
                                             background-color: #B45F04;color: black">Cadastrar</button>
                                             <p class="text-right p-1"><a href="home.php" class="text-dark">Voltar</a></p>

                                             <?php
                                              error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
                                             if($_GET['sucesso'] == 2){
                                             ?>
                                              <p class="text-center text-success p-1">Cadastro Efetuado com Sucesso</p>
                                             <?php
                                              }
                                             ?>
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