<?php
    include_once "bd.php";

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
        <script type="text/javascript">
                    	Node.prototype.hasClass = function(value) {
						    var has = true,
						     names = String(value).trim().split(/\s+/);

						    for(var i = 0, len = names.length; i < len; i++){
						        if(!(this.className.search(new RegExp('(?:\\s+|^)' + names[i] + '(?:\\s+|$)', 'i')) > -1)) {
						            has = false;
						            break;
						        }
						    }
						    return has;
						};
                    	
                    	function exibeMaterias(id){
                    		let elemento = document.getElementById(id)
                    		if (elemento.hasClass('d-none')) {
                    			elemento.classList.remove('d-none');
    							elemento.classList.add('d-block');
                    		}else{
                    			elemento.classList.remove('d-block');
    							elemento.classList.add('d-none');
                    		}
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
                              <a class="dropdown-item" href="">Dados Cadastrais</a>
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
        	<div class="container">
        		<div class="col-5 m-auto p-4">
        			<h2 class="h2">Engenharia da Computacao</h2>
        		</div>



                <?php
                    $bimestre = 1;
                    for($x = 0; $x<=4; $x++){
                ?>
        		  <div class="row p-4	">
                    <!--CRIA LINHA -->
                    <?php

                    
                    
                    for($y = 0; $y < 4; $y++)
                    {    
                    $query = "SELECT * FROM disciplinas WHERE bimestre = $bimestre";
                    $stmt = $pdo->prepare($query);
                    $stmt->execute();
                    $disciplinas = $stmt->fetchAll(PDO::FETCH_ASSOC);    
                    ?>
            			<div class="col-2 m-auto text-center btn" style="border: 2px solid #000; background-color: #808080; font-weight: bold" onclick="exibeMaterias(<?="'bim_".$bimestre."'" ;?>)">
    	        			<span class="bold"><?php                            
                                    echo $bimestre." BIMESTRE";
                             ?></span>

                                <ul <?="id='bim_".$bimestre."'" ?> class="d-none list-group" style="list-style-type:none">
                            <?php for($i = 0; $i < count($disciplinas); $i++){?>
                                    <li><a <?php echo "href='disciplina.php?id=".$disciplinas[$i]['id_disciplina']."'"; ?>   class="btn bg-light btn-block btn-sm mt-1 bg-dark text-light" style="border: 2px solid #B45F04"><?= $disciplinas[$i]['disciplina_nome'] ?></a></li>
                            <?php 
                            }
                            ?>
                            </ul>
            			</div>
                    <?php 
                        $bimestre++; 
                    }?>
                </div>
                <?php
                }
                ?> 
        	</div>
        </section>
      
        <footer class="container pt-4">
            <p class="text-center">Vinicius Machado dos Santos</p>
        </footer>

     
 
      




        

            

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>