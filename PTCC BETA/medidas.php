<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medidas</title>

    <meta name="description" content="">
    <meta name="author" content="Akshay Kumar">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" />

    <!-- Calendar Styling  -->
    <link rel="stylesheet" href="assets/css/plugins/calendar/calendar.css" />

    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

    <!-- Base Styling  -->
    <link rel="stylesheet" href="assets/css/app/app.v1.css" />
    
    <!-- JQuery -->
    <script src="jquery-3.4.1.min.js"></script>
    <script src="acao.js"></script> 
    <script>
        $(document).ready(function(){
           listar(); 
        });
    </script>
    <script>
    verifica();
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-ng-app>
  <?php
  include "aside.php";
  ?>

    <!-- Preloader -->
    <!--<div class="loading-container">
      <div class="loading">
        <div class="l1">
          <div></div>
        </div>
        <div class="l2">
          <div></div>
        </div>
        <div class="l3">
          <div></div>
        </div>
        <div class="l4">
          <div></div>
        </div>
      </div>
    </div>-->
    <!-- Preloader -->


  
    <section class="content">

        <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </header>

    <div class="warper container-fluid">
     <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Medidas</div>
                        <div class="panel-body">

                            <form role="form">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Aluno</label>
                                    <select class="form-control" name="lista" id="lista">
                                        
                                    </select>
                                </div>
                                <div class='row'>
                                    <div class="col-md-4 col-md-offset-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Peso</label>
                                            <input type="number" name="peso" class="form-control" id="peso">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Altura</label>
                                            <input type="number" name="altura" class="form-control" id="altura">
                                        </div>
                                    </div>
                                </div>

                                
                                <div class='row'>
                                    <div class="col-md-4 col-md-offset-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Braço esquerdo</label>
                                            <input type="number" name="bracoesq" class="form-control" id="bracoesq">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Braço direito</label>
                                            <input type="number" name="bracodir" class="form-control" id="bracodir">
                                        </div>
                                    </div>
                                </div>

                                
                                <div class='row'>
                                    <div class="col-md-4 col-md-offset-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Antebraço esquerdo</label>
                                            <input type="number" name="antebracoesq" class="form-control" id="antebracoesq">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Antebraço direito</label>
                                            <input type="number" name="antebracodir" class="form-control" id="antebracodir">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class='row'>
                                    <div class="col-md-4 col-md-offset-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Ombro</label>
                                            <input type="number" name="ombro" class="form-control" id="ombro">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Torax</label>
                                            <input type="number" name="torax" class="form-control" id="torax">
                                        </div>
                                    </div>
                                </div>

                                
                                <div class='row'>
                                    <div class="col-md-4 col-md-offset-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Abdomen</label>
                                            <input type="number" name="abdomen" class="form-control" id="abdomen">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Cintura</label>
                                            <input type="number" name="cintura" class="form-control" id="cintura">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                
                                <div class='row'>
                                    <div class="col-md-4 col-md-offset-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Coxa esquerda</label>
                                            <input type="number" name="coxaesq" class="form-control" id="coxaesq">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Coxa direita</label>
                                            <input type="number" name="coxadir" class="form-control" id="coxadir">
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class='row'>
                                    <div class="col-md-4 col-md-offset-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Panturrilha Direita</label>
                                            <input type="number" name="panturrilhadir" class="form-control" id="panturrilhadir">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Panturrilha Esquerda</label>
                                            <input type="number" name="panturrilhaesq" class="form-control" id="panturrilhaesq">
                                        </div>
                                    </div>
                                </div>
                        
                                  <div class="row">
                                    <div class="col-md-4 col-md-offset-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Quadril</label>
                                            <input type="number" name="quadril" class="form-control" id="quadril">
                                        </div>
                                    </div>
                                </div>       
                                
                                
                                <div class="row">
                                    <div class="col-md-12">&nbsp</div>
                                    <button type="submit" id="attmedidas" class="btn btn-purple">Atualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
    </sction>