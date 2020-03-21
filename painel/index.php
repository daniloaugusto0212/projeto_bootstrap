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
    <nav class="navbar navbar-fixed-top  navbar-default">
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
        <ul id="menu-principal" class="nav navbar-nav">
            <li class="active"><a href="#"  ref_sys="sobre">Editar Sobre</a></li>
            <li><a href="#" ref_sys="cadastrar_equipe">Cadastrar Equipe</a></li>
            <li><a href="#" ref_sys="lista_equipe">Lista Equipe</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">                
            <li><a href=""><span class="glyphicon glyphicon-off"></span> Sair</a></li>                
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div style="position: relative;top:50px" class="box">
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

    <section class="bread">
      <div class="container">
        <ol class="breadcrumb">          
          <li class="active">Home</li>
        </ol>
        </div><!--container-->
    </section>
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              
              <a href="#" class="list-group-item active cor-padrao" ref_sys="sobre"><span class="glyphicon glyphicon-pencil"></span> Sobre</a>
              <a href="#" class="list-group-item" ref_sys="cadastrar_equipe"><span class="glyphicon glyphicon-pencil"></span> Cadastrar Equipe</a>   
              <a href="#" class="list-group-item " ref_sys="lista_equipe"><span class="glyphicon glyphicon-list-alt"></span> Lista Equipe <span class="badge"> 2</span> </a>           
            </div>
          </div><!--col-md-3-->
          <div class="col-md-9">
            <div id="sobre_section" class="panel panel-default">
              <div class="panel-heading cor-padrao">
                <h3 class="panel-title " > Sobre</h3>
              </div>
              <div class="panel-body">
              <form action="/action_page.php">
                <div class="form-group">
                  <label for="email">Código HTML:</label>
                  <textarea name="" id="" cols="30" rows="8" class="form-control" style="resize:vertical;"></textarea>
                </div>                
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              </div>
            </div><!--panel-default-->

            <div id="cadastrar_equipe_section" class="panel panel-default">
              <div class="panel-heading cor-padrao">
                <h3 class="panel-title " > Cadastrar Equipe</h3>
              </div>
              <div class="panel-body">
              <form action="/action_page.php">
              <div class="form-group">
                  <label for="email">Nome do membro:</label>
                  <input type="text" name="nome_menbro" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Descrição do membro:</label>
                  <textarea name="" id="" cols="30" rows="8" class="form-control" style="resize:vertical;"></textarea>
                </div>                
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              </div>
            </div><!--panel-default-->

            <div id="lista_equipe_section" class="panel panel-default">
              <div class="panel-heading cor-padrao">
                <h3 class="panel-title " > Membros da equipe:</h3>
              </div>
              <div class="panel-body">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th>ID:</th>
                      <th>Nome do membro</th>
                      <th>#</th>                         
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    for ($i=0; $i < 5; $i++) { 
                      ?>                    
                    <tr>
                      <td>1</td>
                      <td>Danilo</td>
                      <td><button type="button" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</button></td>
                    </tr>
                      <?php } ?>
                 
                  </tbody>
                </table>
              </div>
            </div><!--panel-default-->
          </div><!--col-md-9-->
        </div><!--row-->
      </div><!--container-->
    <section class="principal">

    </section>
    </div><!--box-->
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(function(){
        cliqueMenu();
        scrollItem();
        /*seleção*/
          function cliqueMenu(){
            $('#menu-principal a, .list-group a').click(function(){
            $('.list-group a').removeClass('active').removeClass('cor-padrao');
            $('#menu-principal a').parent().removeClass('active');
            $('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active');
            $('.list-group a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active').addClass('cor-padrao');
            return false;
          })
        }
        /*scroll suave*/
        function scrollItem(){
          $('#menu-principal a, .list-group a').click(function(){
              var ref = '#'+$(this).attr('ref_sys')+'_section';
              var offset = $(ref).offset().top;
              $('html,body').animate({'scrollTop':offset-50});
              if($(window)[0].innerWidth <= 768){
              $('.icon-bar').click();
              }
          });
        }

        
      })
    </script>
  </body>
</html>