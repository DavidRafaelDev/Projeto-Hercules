<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Novo Aluno</title>

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

    <!--jquery-->
    <script src="jquery-3.4.1.min.js"></script>
    <script src="acao.js"></script> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
verifica();
</script>
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
        
        <div id="a" class="warper container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Novo Aluno</div>
                        <div class="panel-body">
            
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12 control-label">biotipo</label>
                                    <div class="col-sm-12">
                                        <select class="form-control chosen-select" id="biotipo" data-placeholder="Selecione o biotipo">
                                      	    <option></option>
                                            <option value="ectamorfo">Ectomorfo</option>
                                            <option value="mesomorfo">Mesomorfo</option>
                                            <option value="endomorfo">Endomorfo</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                
                                <div class="row">
                                    <div class="col-md-12">&nbsp</div>
                                    <button type="button" id="cadastraralunos" class="btn btn-purple">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
    </div>

