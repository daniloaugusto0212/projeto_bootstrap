<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Painel de controle</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!--paleta de cores https://www.colourlovers.com/palette/4706309/Kimono-->

   
  </head>
  <body>
    <nav class="navbar navbar-default">
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
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Cadastrar Equipe</a></li>
                <li><a href="#about">Editar Sobre</a></li>
                <li><a href="#contact">Gerenciar Equipe</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">                
                <li><a href=""><span class="glyphicon glyphicon-off"></span> Sair</a></li>                
            </ul>
            </div><!--/.nav-collapse -->
        </div>
        </nav>

        <header id="header">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <h2><span class="glyphicon glyphicon-cog"></span> Painel de controle</h2>
              </div><!--col-md-6-->
              <div class="col-md-3">
                <p><span class="glyphicon glyphicon-time"></span> Seu último login foi em: 12/06/2019</p>
              </div><!--col-md-6-->
            </div><!--row-->
          </div><!--container-->
        </header>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>