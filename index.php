<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>SiteDan - Criação de sites</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

   
  </head>
  <body>
      <!--Barra de navegação-->
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Site Dan</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        <!-- Fim da Barra de navegação-->

        
    <div class="box">
        <!--Seção Baner-->
        <section class="banner">
            <div class="overlay"></div>
            <div class="container chamada-baner">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Site Dan</h2>
                        <p>Empresa voltada para desenvolvimento de sites e hospedagem</p>
                        <a href="#">Saiba Mais!</a>
                    </div><!--col-md-12-->                    
                </div><!--row-->            
            </div>
        </section>
        <!-- Fim da Seção Baner-->

        <!--Seção de cadastro-->
            <section class="cadastro-lead">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <h2><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Entre na nossa lista!</h2>
                        </div><!--col-md-6-->
                        <div class="col-md-6">
                            <form method="post">
                                <input type="text" name="nome"><input type="submit" value="Enviar">                                
                            </form>
                        </div><!--col-md-6-->
                    </div><!--row-->
                </div><!--container-->
            </section><!--cadastro-lead-->
        <!--Fim da Seção de cadastro-->

        <!--Seção de depoimentos-->
        <section class="depoimento text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Depoimento</h2>
                        <blockquote>
                            <p>"O pedaço padrão de Lorem Ipsum usado desde os anos 1500 é reproduzido abaixo para os interessados. As seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cícero também são reproduzidas em sua forma original exata, acompanhadas de versões em inglês da tradução de 1914 por H. Rackham."</p>
                        </blockquote>
                    </div><!--col-md-12-->
                </div><!--row-->
            </div><!--container-->
        </section>
        <!-- Fim da Seção de depoimentos-->

        <!--Seção diferenciais-->
            <section class="diferenciais text-center">
                <h2>Conheça nossa empresa!</h2>
                <div class="container  diferenciais-container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3><span class="glyphicon glyphicon-glass"></span></h3>
                            <h2>Diferencial #1 </h2>
                            <p>"O pedaço padrão de Lorem Ipsum usado desde os anos 1500 é reproduzido abaixo para os interessados. As seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cícero também são reproduzidas em sua forma original exata, acompanhadas de versões em inglês da tradução de 1914 por H. Rackham."</p>
                        </div><!--col-md-4-->
                        <div class="col-md-4">
                            <h3><span class="glyphicon glyphicon-star"></span></h3>
                            <h2>Diferencial #2 </h2>
                            <p>"O pedaço padrão de Lorem Ipsum usado desde os anos 1500 é reproduzido abaixo para os interessados. As seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cícero também são reproduzidas em sua forma original exata, acompanhadas de versões em inglês da tradução de 1914 por H. Rackham."</p>
                        </div><!--col-md-4-->
                        <div class="col-md-4">
                            <h3><span class="glyphicon glyphicon-heart"></span></h3>
                            <h2>Diferencial #3 </h2>
                            <p>"O pedaço padrão de Lorem Ipsum usado desde os anos 1500 é reproduzido abaixo para os interessados. As seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cícero também são reproduzidas em sua forma original exata, acompanhadas de versões em inglês da tradução de 1914 por H. Rackham."</p>
                        </div><!--col-md-4-->
                    </div><!--row-->
                </div><!--container-->
            </section>
        <!--Fim da Seção diferenciais-->
    </div><!--box-->
        

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>