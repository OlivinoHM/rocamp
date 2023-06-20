<?php
  $cabecalho_title = "ROCAMP Engenharia e Serviços";
  include("cabecalho.php");
?>
<link href="css/index.css" rel="stylesheet">
<body id="index">
    <!-- Slide gallery -->
    <div class="jumbotron container" style="padding-bottom:0px;">
        <div class="container">
            <div class="col-xs-12">
                <div class="row">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="servicos.html"><img src="img/carousel1.jpg" alt=""></a>
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="servicos.html"><img src="img/carousel2.jpg" alt=""></a>
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="servicos.html"><img src="img/carousel3.jpg" alt=""></a>
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                            </div>

                        <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                    </div><!-- carousel -->
                </div>
            </div><!-- col -->
        </div><!-- container -->
    </div>
    <!-- End Slide gallery 11 -->
        
    <!-- Thumbnails -->
    <div class="container thumbs">
        <div class="row">
            <div class="col-sm-16">
 
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="servicos.html">  <img src="img/pic1.jpg" alt="" class="img-responsive"></a>
                            <div class="caption">
                                <a href="servicos.html">  <h3 class="" style="color:#012e4d;">Bombeiro Civil</h3></a>
                                <p>Recrutamos, selecionamos e treinamos bombeiros civis, seguindo rigorosos processos visando garantir ao contratante o fornecimento de mão-de-obra qualificada.</p><br>

                                <div class="btn-toolbar text-center">
                                    <a href="servicos.html" role="button" class="btn btn-primary pull-right" style="background-color:#012e4d; border-color:#012e4d;">Serviços</a>
                                </div>
                            </div>
                    </div>
                </div>
                
                <div class="col-md-4 ">
                    <div class="thumbnail">
                        <a href="servicos.html">  <img src="img/pic2.jpg" alt="" class="img-responsive"></a>
                        <div class="caption">
                            <a href="servicos.html"> <h3 class="" style="color:#012e4d;">Operação de Logistica</h3></a>
                            <p>Mão de obra para operação logistica<br>
                                de carga e descarga</p><br><br><br>
                                <div class="btn-toolbar text-center">
                                    <a href="servicos.html" role="button" class="btn btn-primary pull-right" style="background-color:#012e4d; border-color:#012e4d;">Serviços</a>
                                </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-4 ">
                    <div class="thumbnail">
                        <a href="servicos.html">  <img src="img/pic3.jpg" alt="" class="img-responsive"></a>
                            <div class="caption">
                                <a href="servicos.html">   <h3 class="" style="color:#012e4d;">Serviços de Jardinagem</h3></a>
                                <p>O profissional selecionado para exercer as funções em jardins de empresas, condomínios e residências, cuidar da manutenção de poda e corte de árvores e plantas, corte de grama, limpeza de áreas gramadas e jardins</p>
                                <div class="btn-toolbar text-center">
                                    <a href="#" role="button" class="btn btn-primary pull-right" style="background-color:#012e4d; border-color:#012e4d;">Serviços</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Thumbnails -->
    
    
        
    <!-- Content -->
    <div class="container">

        <div class="row">


        </div>
    </div><!-- End Content -->

    <?php include("rodape.php");
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>
