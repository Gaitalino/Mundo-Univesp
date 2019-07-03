<?php
    session_start();
    include_once "bd.php";
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

    $acao = $_GET['acao'];
    if($acao == 1){

        $condicao = '';

        if($_POST['bimestre']){
            $condicao .= " and bimestre = ".$_POST['bimestre'];
        }

        if($_POST['data_inicial']){
            if($_POST['data_final']){
                $condicao .= " and a.data_acesso BETWEEN ". $_POST['data_inicial']." AND ". $_POST['data_final'];
            }else{
                $condicao .= " and a.data_acesso > ".$_POST['data_inicial'];
            }
        }

        if(!$_POST['data_inicial'] && $_POST['data_final']){
            $condicao .= " and a.data_acesso < ".$_POST['data_final'];
        }


        if($_POST['conteudo_univesp']){
            $condicao .= " and v.univesp = ".($_POST['conteudo_univesp'] - 1);
        }

        

        $query = "select (select count(d.id_disciplina) from disciplinas d INNER JOIN videos v on v.id_disciplina = d.id_disciplina and v.status = 1 where d.id_disciplina = a.id_disciplina ) as qnt_videos,d.id_disciplina, count(a.id) as visualizacoes, a.id, d.disciplina_nome, d.bimestre, a.data_acesso, d.curso, v.univesp from acessos_videos a inner JOIN disciplinas d on a.id_disciplina = d.id_disciplina inner join videos v on v.id_video = a.id_video WHERE 1".$condicao." group by a.id_disciplina order by d.disciplina_nome asc";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $acessos = $stmt->fetchAll(PDO::FETCH_ASSOC);

       



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

        <link rel="stylesheet" type="text/css" href="css/estilos2.css">

        <!--Fonts Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <title>Mundo Univesp</title>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <script type="text/javascript">
            $(document).ready(function () {

                $("#filtrar").click(function(){
                    bimestre = $('#bimestre').value;
                      $('#pagina').load('dados_relatorio.php?bimestre='+bimestre);
                    });
                });
        </script>

        <script type="text/javascript">
            
                function teste(id_video, id_iframe){
                    id_iframe = id_iframe.toString()
                    id_video = id_video.toString()
                    var iframe = document.getElementById(id_iframe);
                    var assistir_video = document.getElementById(id_video);
                    iframe.style.display = 'none';
                    assistir_video.style.display = "block"; 
                }
                function teste2(id_video, id_iframe){
                    setTimeout(function(){ 
                        id_iframe = id_iframe.toString()
                        id_video = id_video.toString()
                        var iframe = document.getElementById(id_iframe);
                        var assistir_video = document.getElementById(id_video);
                        iframe.style.display = 'block';
                        assistir_video.style.display = "none";; }, 5000);
                     
                }
         </script>
    </head>
    <body>
         <header class="" id="cabecalho">

            <div class="container">
                <div class="row py-3">
                    <!--logo-->
                    <div id="logo" class="col-12 text-center text-md-center align-self-center ">
                        <h1><a href="home.php" class="text-light align-self-center">Mundo <span>Univesp</span></a></h1>        
                    </div> 

                    <nav class="navbar navbar-dark col-4 d-md-none"> 
                        <!--Hamburguer-->
                        <div class="ml-auto">
                          <button class="navbar-toggler m-auto" data-toggle="collapse" data-target="#navegacao">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                        </div>
                    </nav>


                    <!--Navegação-->
                    
                </div>

                <div class="navbar-expand-md row">
                        <div class="collapse navbar-collapse col-8" id="navegacao">
                          <ul class="navbar-nav m-auto">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Engenharia
                                </a>
                                    <div class="dropdown-menu dropdown-menu-right pb-0 bg-warning text-center" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="computacao.php">Computacao</a>
                                      <a class="dropdown-item" href="#">Producao</a>
                                    </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Licenciatura
                                </a>
                                    <div class="dropdown-menu dropdown-menu-right pb-0 bg-warning text-center" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item text-light" href="#">Biologia</a>
                                      <a class="dropdown-item text-light" href="#">Física</a>
                                      <a class="dropdown-item text-light" href="#">Matemática</a>
                                      <a class="dropdown-item text-light" href="#">Quimica</a>
                                    </div>
                            </li>
                            <li class="nav-item"><a class="nav-link text-light" href="">Pedagogia</a></li>

                            

                        </ul>
                        </div>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php  echo $_SESSION['usuario']['nome']; ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0 bg-dark text-left" aria-labelledby="navbarDropdownMenuLink">
                            <a class="nav-link text-danger" href="cadastro_conteudo.php">Cadastrar Conteudo</a>
                              <a class="dropdown-item" href="dados_cadastrais.php">Dados Cadastrais</a>
                              <?php
                                if($_SESSION['usuario']['tipo'] == 3){
                              ?>
                                <a class="dropdown-item" href="relatorio.php">Relatório</a>
                              <?php
                                }
                              ?>
                              <a class="dropdown-item" href="logout.php">Sair</a>
                            </div>
                        </li>
                    </div> 
            </div>
        </header>

        <section>
            <div class="mt-4 row">
                <div class="col-12 text-center">
                    <span>RELATÓRIO</span>
                </div>
            </div>
            <div class="row mt-4 py-4">
                <div class="col-2 py-4 container"style="border: 2px solid black">
                  <div class="row">
                      <div class="col-12 m-auto text-center">
                          <span>Filtros</span>
                      </div>
                  </div> 
                  <div class="w-100 mt-4  text-center btn" style="border: 2px solid #000; background-color: #808080; font-weight: bold">
                        <span class="bold">VISUALIZAÇÕES</span>
                        <div id="videos" class="list-group pt-2">
                            <form id="form"  method="post" action="relatorio.php?acao=1">
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
                                                <p class="text-left p-0 m-0">Data Inicial</p>
                                                 <input class="form-control w-100" type="date" name="data_inicial">
                                             </div>
                                             <div class="form-group">
                                                <p class="text-left p-0 m-0">Data Final</p>
                                                 <input class="form-control" type="date" name="data_final">
                                             </div>
                                             <div class="form-group">
                                              <select id="curso" class="form-control" name="curso">
                                                <option value="">Curso</option>
                                                <option value="1">Engenharia Computação</option>
                                              </select>
                                            </div>

                                            <div class="form-group">
                                              <select id="conteudo_univesp" class="form-control" name="conteudo_univesp">
                                                <option value="">Conteúdo Univesp</option>
                                                <option value="2">Sim</option>
                                                <option value="1">Não</option>    
                                              </select>
                                            </div>
                                              

                                            
                                             <button type="submit" id="filtrar"  type="" class="btn btn-lg btn-block"  style="
                                             background-color: #B45F04;color: black">Filtrar</button>
                                        </form>
                        </div>
                    </div>
                </div>
                <div class=" col-9 pt-4 container"style="border: 2px solid black">
                    <div id="botoes">
                          <div >
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Disciplina</th>
                                      <th scope="col">Qnt Videos</th>
                                      <th scope="col">Visualizações</th>
                                    </tr>
                                </thead>
                                <tbody id="">
                                    <?php
                                    if ($acao == 1) {
                                            $i = 0;
                                            while($i < count($acessos)) {
                                    ?>
                                                <tr>
                                                  <th scope="row"><?= $i + 1 ?></th>
                                                  <td><?= $acessos[$i]['disciplina_nome']; ?></td>
                                                  <td><?=$acessos[$i]['qnt_videos']?></td>
                                                  <td><?=$acessos[$i]['visualizacoes']?></td>
                                                </tr>

                                    <?php
                                    $i++;}
                                    }
                                    ?>
                                    <?php
                                    if( count($acessos) == 0 && $acao == 1){
                                    ?>
                                    <tr>
                                    <th class="text-danger">Não foram encontrados registros</th>
                                    <th class="text-danger"></th>
                                    <th class="text-danger"></th>
                                    <th class="text-danger"></th>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                         
                                
                            
                          </div>
                    </div>
                   
                </div>
            </div>
        </section>

          <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

       
          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>