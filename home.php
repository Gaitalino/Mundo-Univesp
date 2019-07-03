<?php
    session_start();
    if($_SESSION['autoriza_login'] <> 1){
        header('Location:index.php?erro=2');
    }

    include_once "bd.php";
    $query = "select * from videos v inner join disciplinas d on v.id_disciplina = d.id_disciplina where v.status = 1 order by id_video desc limit 4";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $novidades = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $query = "select * from acessos_videos a inner join videos v on a.id_video = v.id_video where a.id_usuario = ".$_SESSION['usuario']['id_usuario']." order by id desc limit 3";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $ultimos_assistidos = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $query = "SELECT * FROM usuarios u inner join disciplinas d on u.bimestre = d.bimestre where u.bimestre =".$_SESSION['usuario']['bimestre'];
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $bimestre_atual = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

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


        <title>Mundo Univesp</title>
    </head>
    <body onload="carregaIframe()">
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

        <section class="container">
            <div class="mt-4 p-2" style="border: 1px solid grey">
                <div>
                    <h2 class="" style="font-size: 25px; ">Novidades</h2>  
                </div>
                
                <div class=" row">

                    <?php
                    
                        for($i = 0; $i < count($novidades);$i++){


                    ?>
                    <div <?= "onmouseover=\"teste('video_novidades_".$i."', 'id_iframe_novidades_".$i."')\""?> <?= "onmouseout=\"teste2('video_novidades_".$i."', 'id_iframe_novidades_".$i."')\""?>class=" mt-4 col-2 m-auto p-0" >
                            <p><?= $novidades[$i]['disciplina_nome'] ?></p>
                            <div <?= "id='video_novidades_".$i."'" ?> class="w-100 mt-4 col-12 m-auto p-0 pb-2 text-center" style="display: none;">
                                <a <?= "href='assistir_video.php?id_video=".$novidades[$i]['id_video']."&pg_inicial=1'" ?> href="assistir_video.php?" class="">Assistir ao video</a>
                            </div>
                            <div><iframe <?= "id='id_iframe_novidades_".$i."'" ?>   width="200" height="125" <?= "src='https://www.youtube.com/embed/".$novidades[$i]['url']."'" ?> ></iframe></div>
                            <p><?=$novidades[$i]['video_nome']?></p>
                    </div>
                    
                    <?php
                }
                    ?>

                   
                </div>
            </div>
                
            
            <div class="mt-4 p-2" style="border: 1px solid grey">
                <div>
                    <h2 class="" style="font-size: 25px; ">Ultimos Assistido</h2>
                </div>
                <div class="row">  

                        <div onmouseover = "teste('ultimos_assistidos_video_0','id_iframe_ultimos_assistidos_0')" onmouseout="teste2('ultimos_assistidos_video_0','id_iframe_ultimos_assistidos_0')" class="col-6">
                            <p><?= $ultimos_assistidos[0]['video_nome'] ?></p>
                            <div <?= "id='ultimos_assistidos_video_0'" ?>class="w-100 mt-4 col-12 m-auto p-0 pb-2 text-center" style="display: none;">
                                <a <?= "href='assistir_video.php?id_video=".$ultimos_assistidos[0]['id_video']."&pg_inicial=1'" ?> class="">Assistir ao video</a>
                            </div>
                            <iframe <?= "id='id_iframe_ultimos_assistidos_0'" ?> width="560" height="315" <?= "src='https://www.youtube.com/embed/".$ultimos_assistidos[0]['url']."'" ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <div  onmouseover = "teste('ultimos_assistidos_video_1','id_iframe_ultimos_assistidos_1')" onmouseout="teste2('ultimos_assistidos_video_1','id_iframe_ultimos_assistidos_1')" class=" col-2 m-auto" >
                            <div>
                                <p><?= $ultimos_assistidos[1]['video_nome'] ?></p>
                                <div <?=  "id='ultimos_assistidos_video_1'"  ?>class="w-100 mt-4 col-12 m-auto p-0 pb-2 text-center" style="display: none;">
                                    <a <?= "href='assistir_video.php?id_video=".$ultimos_assistidos[1]['id_video']."&pg_inicial=1'" ?> class="">Assistir ao video</a>
                                </div>
                                <iframe <?= "id='id_iframe_ultimos_assistidos_1'" ?> width="200" height="125" <?= "src='https://www.youtube.com/embed/".$ultimos_assistidos[1]['url']."'" ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                    <div onmouseover = "teste('ultimos_assistidos_video_2','id_iframe_ultimos_assistidos_2')" onmouseout="teste2('ultimos_assistidos_video_2','id_iframe_ultimos_assistidos_2')" class=" mt-4 p-0 col-2 m-auto" >
                        <div>
                            <p><?= $ultimos_assistidos[2]['video_nome'] ?></p>
                            <div <?=  "id='ultimos_assistidos_video_2'"  ?>class="w-100 mt-4 col-12 m-auto p-0 pb-2 text-center" style="display: none;">
                                    <a <?= "href='assistir_video.php?id_video=".$ultimos_assistidos[2]['id_video']."&pg_inicial=1'" ?> class="">Assistir ao video</a>
                                </div>
                            <iframe <?= "id='id_iframe_ultimos_assistidos_2'" ?> width="200" height="125" <?= "src='https://www.youtube.com/embed/".$ultimos_assistidos[2]['url']."'" ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>       
            </div>
            

            <div class=" mt-4 p-2" style="border: 1px solid grey">
                <h2 class="" style="font-size: 25px; " >Bimestre Atual</h2>
                <div class="row pb-4">

                    <?php
                    
                        for($i = 0; $i < count($bimestre_atual);$i++){


                    ?>
                        <a <?="href='disciplina.php?id=".$bimestre_atual[$i]['id_disciplina']."'" ?> class="col-2 m-auto text-center" style=" font-size: 16px; background-color: grey; color: black">
                            <?=$bimestre_atual[$i]['disciplina_nome'] ?>
                        </a>
                         <?php
                    }
                    ?>
                </div>
            </div>


        </section>
        <footer id="footer" class="container pt-4">
            <p class="text-center">Vinicius Machado dos Santos</p>
        </footer>

     
 
      




        

            

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script type="text/javascript">
            function atualizaRelatorio(id_disciplina,id_video=null){
                    window.location.href = "assistir_video.php?id_disciplina="+id_disciplina+"&id_video="+id_video
                
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
       
    </body>
</html>