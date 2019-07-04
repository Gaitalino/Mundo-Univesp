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
                    <div id="logo" class="col-12 text-center text-md-center align-self-center mb-0 pb-0">
                        <h1><a href="" class="text-light align-self-center" style="font-size: 40px;">Mundo <span>Univesp</span></a></h1>        
                    </div> 
                   


                   
                </div> 
                
            </div>
        </header>

        <section id="banner">
            <div class="container mt-2">
                <!--Inicio Banner destaque-->
                <div class="col-12 bg-light p-1">
                
                    <!--Inicio Carousel-->
                    <div id="index-carousel" class="carousel slide" data-ride="carousel" >

                        <!--Indicadores-->
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                              
                        <!-- Itens do carousel-->
                        <div class="carousel-inner m-auto">
                            <div class="carousel-item active text-center">
                                <a href=""><img class="img-fluid img-thumbnail" src="img/andradina.jpg"></a> 
                                <div class="carousel-caption">
                                    <p class="">Representantes da prefeitura de Andradina visitam sede da Univesp</p>
                                </div>
                            </div>

                            <div class="carousel-item text-center">
                                <a href=""><img class="img-fluid img-thumbnail" src="img/rodolfo_01.jpg"></a> 
                                <div class="carousel-caption">
                                    <p class="">Professor Rodolfo Jardim de Azevedo assume presidência da Univesp</p>
                                </div>
                            </div>
                        </div><!--Fim dos itens carousel-->

                        <!-- Controles-->
                        <a class="carousel-control-prev" href="#index-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Anterior</span>
                        </a>

                        <a class="carousel-control-next " href="#index-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div><!--Fim do carousel-->
                </div><!--Fim Banner destaque-->
            </div>
        </section>
 
        <section id="noticias" class="pt-4 mb-2 mt-4">
            <div class="container ">
                <div class="row">
                    <div class="col-12 col-lg-8 mb-3">
                        <h2 class="">Notícias</h2>
                        <a href=""  class=" "> 
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/professora.jpg" width="" alt="Luis Kawaguti/UOL" title="Luis Kawaguti/UOL" class="img-fluid"> 
                                </div>
                                <div id="noticia-destaque" class="col-md-8">
                                    <strong class="text-danger">
                                        Nova diretora
                                    </strong> 
                                    <h2 class="text-dark font-weight-bold">
                                        Professora Simone Telles é a nova diretora acadêmica da Univesp 
                                    </h2> 
                                    <p class="text-dark font-weight-normal">
                                        Ex-coordenadora da Educação a Distância das Fatecs
                                    </p>
                                </div>
                            </div>
                        </a>

                        <div class="d-none d-lg-block">
                            <a href=""  class=" "> 
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/professora.jpg" width="" alt="Luis Kawaguti/UOL" title="Luis Kawaguti/UOL" class="img-fluid"> 
                                </div>
                                <div id="noticia-destaque" class="col-md-8">
                                    <strong class="text-danger">
                                        Nova diretora
                                    </strong> 
                                    <h2 class="text-dark font-weight-bold">
                                        Professora Simone Telles é a nova diretora acadêmica da Univesp 
                                    </h2> 
                                    <p class="text-dark font-weight-normal">
                                        Ex-coordenadora da Educação a Distância das Fatecs
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a href=""  class=" "> 
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/professora.jpg" width="" alt="Luis Kawaguti/UOL" title="Luis Kawaguti/UOL" class="img-fluid"> 
                                </div>
                                <div id="noticia-destaque" class="col-md-8">
                                    <strong class="text-danger">
                                        Nova diretora
                                    </strong> 
                                    <h2 class="text-dark font-weight-bold">
                                        Professora Simone Telles é a nova diretora acadêmica da Univesp 
                                    </h2> 
                                    <p class="text-dark font-weight-normal">
                                        Ex-coordenadora da Educação a Distância das Fatecs
                                    </p>
                                </div>
                            </div>
                        </a>
                        </div>

                        <div class="text-md-left link pt-1">
                            <a href="" class="text-dark font-weight-normal">Mais Notícias</a>
                        </div>                      
                    </div>

                    <div class="col-12 col-lg-4 text-center ">
                        <div class="align-self-center">
                            <h2 class="">Vem por aí</h2>

                            <hr class="w-50 d-md-none">
                            <hr class="d-none  d-md-block">
        
                            <ul class="list-unstyled font-weight-normal">
                                <li class="text-danger">23/01 - Exame </li>
                                <li class="text-danger">23/02 - Prova 1 semestre </li>
                                <li class="text-warning">27/02 - Entrega documentos </li>
                                <li class="text-warning">23/03 - Prova 2 semestre </li>
                                <li class="text-warning">23/04 - Exame  provas 2 semestre </li>
                                <li class="text-warning">23/05 - Exame </li>
                                <li class="text-success">27/02 - Entrega documentos </li>
                                <li class="text-success">23/03 - Prova 2 semestre </li>
                                <li class="text-success">23/04 - Exame  provas 2 semestre </li>
                                <li class="text-success">23/05 - Exame </li><li class="">27/02 - Entrega documentos </li>
                            </ul>  
                        </div>     
                    </div>
                </div>
                <hr>
            </div>
        </section>
        <section class="m-auto text-center container">
            <div>
                <h2><a href="login.php">Efetuar Login no Sistema</a>
            </div>
            <hr>
        </section>


        <section class="container mt-4 pt-4">
            <div class="row">
                <div class="col-10 m-auto">
                    <h2 class="text-center" style="font-size: 36px;">Clique e Conheça</h2> 
                </div>
            </div>

            <div class="mt-4 row">
                <div class="col-10 m-auto">
                    <a onclick="exibeMaterias('pergunta-1')"><h3 class="text-left btn1" style="color: #dc3545; font-weight: bold; cursor: pointer!important;">
                    Nunca ouvi falar desse Mundo Univesp.</h3></a>
                    <h4 id="pergunta-1" class="text-justify d-none">
                        Mundo Univesp é um sistema organizador de informações e vídeos para facilitar o dia-a-dia dos alunos na busca de conteúdo de qualidade na internet.
                    </h4>
                    <br>
                     <a onclick="exibeMaterias('pergunta-2')"><h3 class="text-left btn1" style="; font-weight: bold; cursor: pointer!important;">
                     E quem é que cuida desse Mundo Univesp?</h3></a>
                    <h4 id="pergunta-2" class="text-justify d-none">
                        O Mundo Unívesp é gerenciado pelos próprios alunos. Eles selecionam os conteúdos online e disponibilizam na plataforma.
                    </h4>
                    <br>
                     <a onclick="exibeMaterias('pergunta-3')"><h3 class="text-left btn1" style="color: #dc3545; font-weight: bold; cursor: pointer!important;">
                     Aposto que tá cheio de porcaria aí!!</h3></a>
                    <h4 id="pergunta-3" class="text-justify d-none">
                        Todo conteúdo antes de ser disponibilizado para outros alunos passa por uma avaliação dos mediadores de conteúdos (também alunos), que verificam a relevância desse conteúdo.
                    </h4>
                    <br>
                    <a onclick="exibeMaterias('pergunta-4')"><h3 class="text-left btn1" style="; font-weight: bold; cursor: pointer!important;">
                    Prefiro assistir os vídeos no AVA.</h3></a>
                    <h4 id="pergunta-4" class="text-justify d-none">
                        Ao acessar o sistema é possível visualizar tanto vídeos da internet quanto as video aulas da Univesp de maneira fácil e organizada.
                    </h4>
                    <br>
                    <a onclick="exibeMaterias('pergunta-5')"><h3 class="text-left btn1" style="color: #dc3545; font-weight: bold; cursor: pointer!important;">
                    Xiiii, aposto que a Univesp vai mandar tirar do ar.</h3></a>
                    <h4 id="pergunta-5" class="text-justify d-none">
                        Além de vantagens para os alunos o Mundo Univesp já avisa que seus acessos no sistema são monitorados, pois também temos como objetivo gerar  relatórios de dados para a Universidade possibilitando visualizar as necessidades dos aluno. 
                     </h4>
                    <br>
                    <a onclick="exibeMaterias('pergunta-6')"><h3 class="text-left btn1" style=" font-weight: bold; cursor: pointer!important;">
                    Já vão me investigar?</h3></a>
                    <h4 id="pergunta-6" class="text-justify d-none">
                        Fique tranquilo sua privacidade será mantida.
                    </h4>
                    <br>
                    <a onclick="exibeMaterias('pergunta-7')"><h3 class="text-left btn1" style="color: #dc3545; font-weight: bold; cursor: pointer!important;">
                    E quem vai usar esse Mundo Univesp?</h3></a>
                    <h4 id="pergunta-7" class="text-justify d-none">
                        O sistema Mundo Univesp é para qualquer aluno Univesp interessado em ajudar a comunidade a encontrar conteúdo de qualidade e é claro a não perder tempo buscando conteúdo quando aquela aula não facilitou nem um pouco o aprendizado.
                    </h4>
                    <br>
                     <a onclick="exibeMaterias('pergunta-8')"><h3 class="text-left btn1" style=" font-weight: bold; cursor: pointer!important;">
                     Tá bom e o que vocês ganham com isso?</h3></a>
                    <h4 id="pergunta-8" class="text-justify d-none">
                        o projeto é sem fins lucrativos. Nosso objetivo é nos tornarmos um sistema que possa se mantido pelos próprios alunos trazendo praticidade e maior qualidade nos estudos.
                    </h4>
                    <br>
                    <a onclick="exibeMaterias('pergunta-9')"><h3 class="text-left btn1" style="color: #dc3545; font-weight: bold; cursor: pointer!important;">
                    Ta me convencendo. E como eu acesso?</h3></a>
                    <h4 id="pergunta-9" class="text-justify d-none">
                        Só precisa ter um email válido Univesp. Com ele você pode efetuar seu cadastro no nosso sistem e utilizá-lo á vontade. Aproveite e nos ajude trabalhando conosco. <a href="cadastro.php">Clique aqui</a> para fazer seu cadastro.
                    </h4>
                    <br>
                    <a onclick="exibeMaterias('pergunta-10')"><h3 class="text-left btn1" style=" font-weight: bold; cursor: pointer!important;">
                    Vou trabalhar de graça?</h3></a>
                    <h4 id="pergunta-10" class="text-justify d-none">
                        O Mundo Univesp é uma plataforma para ser administrada pelos próprios alunos da Univesp, participe e adquira bons conhecimentos técnicos e experiência na área de desenvolvimento. Basta apenas nos contatar
                    </h4>
                    <br>
                   <a onclick="exibeMaterias('pergunta-11')"><h3 class="text-left btn1" style="color: #dc3545; font-weight: bold; cursor: pointer!important;">
                   E onde eu encontro vocês?</h3></a>
                    <h4 id="pergunta-11" class="text-justify d-none">
                        Você pode nos contatar através do nosso email<br>
                        suporte@mundounivesp.com.br
                    </h4>
                    <br>

                </div>
            </div>
            
            <div class="text-center">
                
            </div>
        </section>
         <footer id="footer" class="container pt-4">
            <p class="text-center">Mundo Univesp</p>
        </footer>





        

            

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>