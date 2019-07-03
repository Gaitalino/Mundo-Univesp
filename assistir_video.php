<?php
    session_start();
    include_once "bd.php";

    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    
    if($_SESSION['autoriza_login'] <> 1){
        header('Location:index.php?erro=2');
    }

    $id_video = $_GET['id_video'] ? $_GET['id_video'] : '';

    if($id_video == ''){
    	echo "video nao localizado";
    }else{
    	$query = "select * from videos where id_video = $id_video";
	    $stmt = $pdo->prepare($query);
	    $stmt->execute();
	    $video = $stmt->fetch(PDO::FETCH_ASSOC);



        //registra acesso
        $id_video = $video['id_video'];
        $id_disciplina = $video['id_disciplina'];
        $id_usuario = $_SESSION['usuario']['id_usuario'];
        $pg_inicial = $_GET['pg_inicial'] ? $_GET['pg_inicial'] : 0;
        $query = "insert into acessos_videos (id_video,id_disciplina,id_usuario,pg_inicial) values ($id_video,$id_disciplina,$id_usuario,$pg_inicial)";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

    }
?>


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
        <script type="text/javascript" src="script/script.js"></script>
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
             <div class="pt-4 mt-4 col-8 m-auto p-0 container" >
	            <div class="mr-auto">
	            	<h2 class="text-center"><?=$video['video_nome']?></h2>
	                <iframe width="100%" height="50%" <?= "src='https://www.youtube.com/embed/".$video['url']."'" ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                
	            </div>
        	</div>
        </section>

          <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

       
          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>