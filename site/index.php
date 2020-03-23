<?php
    $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_projeto','root', '');
    $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
    $sobre->execute();
    $sobre = $sobre->fetch()['sobre'];
?>
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
                <h2>Conheça nossa empresa</h2>
                <div class="container  diferenciais-container">
                    <div class="row"><?php echo $sobre; ?></div><!--row-->
                </div><!--container-->
            </section>
        <!--Fim da Seção diferenciais-->
        <!--Seção equipe-->
            <section class="equipe">
                <h2>Equipe</h2>
                <div class="container equipe-container">
                    <div class="row">
                    <?php 
                        $selectMembros = $pdo->prepare("SELECT * FROM `tb_equipe`");
                        $selectMembros->execute();
                        $membros = $selectMembros->fetchAll();
                        for ($i=0; $i < count($membros); $i++) {            
                    ?>
                        <div class="col-md-6">
                            <div class="equipe-single">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="user-picture">
                                            <div class="user-picture-child"><span class="glyphicon glyphicon-user"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h3><?php echo $membros[$i]['nome'] ?> </h3>
                                        <p><?php echo $membros[$i]['descricao'] ?></p>
                                    </div>
                                </div>
                            </div><!--equipe-single-->
                        </div><!--col-md-6-->
                    <?php } ?>                                         
                    </div><!--row-->
                </div><!--equipe-container-->
            </section>
        <!--Fim da Seção equipe-->
        <!--Seção Final-->
            <section class="final-site" id="contato">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Fale conosco</h2>
                        <form action="/action_page.php">
                        <div class="form-group">
                            <label for="email">Nome:</label>
                            <input type="name" name="nome" class="form-control" id="nome">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Mensagem:</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <h2>Nosso planos</h2>
                        <table class="table">
                        <?php 
                        $selectPlanos = $pdo->prepare("SELECT * FROM `tb_planos`");
                        $selectPlanos->execute();
                        $planos = $selectPlanos->fetchAll();
                        ?>

                        <thead>
                        <tr>
                        <?php
                        for ($i=0; $i < count($planos); $i++) {            
                    ?>
                        <th><?php echo $planos[$i]['nome'] ?></th>                       
                        <?php } ?>              
                                
                        </tr>
                        </thead>
                            <tbody>
                            <tr>
                            <?php
                            for ($i=0; $i < count($planos); $i++) {            
                            ?>
                                <td><?php echo $planos[$i]['valor'] ?></td>
                                
                            <?php } ?>
                            </tr>                  
                            
                            </tbody>
                        </table>
                    </div><!--col-md-6-->
                </div><!--row-->
            </div><!--container-->
            </section>
        <!--Fim da Seção Final-->
        <footer>
            <p class="text-center" >Todos os direitos reservados! | Email de Contato: <a href="contato@sitedan.com.br">
            contato@sitedan.com.br</a>.</p>            
        </footer>
    </div><!--box-->

    <!--Scripts JS-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/scroll.js"></script>    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>