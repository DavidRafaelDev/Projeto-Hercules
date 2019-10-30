<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Hercules</title>

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

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="jquery-3.4.1.min.js"></script>
  <script src="acao.js"></script> 

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
            
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">
        	
            <div class="page-header"><h1>Dashboard <small>Let's get a quick overview...</small></h1></div>
            
            
            <div class="row">
            
            	<div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	<span id="dashboard-stats-sparkline1" class="sparkline transit"></span>
                    	<i class="fa fa-shopping-cart bg-danger transit stats-icon"></i>
                        <h3 class="transit">1547 <small class="text-green"><i class="fa fa-caret-up"></i> 8%</small></h3>
                        <p class="text-muted transit">Last week sales</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	<span id="dashboard-stats-sparkline2" class="sparkline transit"></span>
                    	<i class="fa fa-tags bg-info transit stats-icon"></i>
                        <h3 class="transit">91% <small class="text-red"><i class="fa fa-caret-down"></i> 6%</small></h3>
                        <p class="text-muted transit">Transactions</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	<span id="dashboard-stats-sparkline3" class="sparkline transit"></span>
                    	<i class="fa fa-user bg-success transit stats-icon"></i>
                        <h3 class="transit">2,014 <small class="text-green"><i class="fa fa-caret-up"></i> 9%</small></h3>
                        <p class="text-muted transit">Total Users</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	<span id="dashboard-stats-sparkline4" class="sparkline transit"></span>
                    	<i class="fa fa-warning bg-warning transit stats-icon"></i>
                        <h3 class="transit">-344 <small class="text-red"><i class="fa fa-caret-down"></i> 20%</small></h3>
                        <p class="text-muted transit">Churned Users</p>
                    </div>
                </div>
            
            </div>
            
            
            <!--<div class="row">
            	<div class="col-lg-8">
                
                	<div class="panel panel-default">
                      <div class="panel-heading clean">
                      	Statistics 
                        <div class="pull-right">
                        	<div class="btn-group">
                        	<button type="button" class="btn btn-default btn-sm btn-circle" data-toggle="dropdown">Monthly <span class="caret"></span></button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Daily</a></li>
                                <li><a href="#">Weekly</a></li>
                                <li class="active"><a href="#">Monthly</a></li>
                                <li><a href="#">Yearly</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Specific Time</a></li>
                              </ul>
                            </div>
                            <button type="button" class="btn btn-default btn-sm btn-circle">GO</button>
                        </div>
                      </div>
                      <div class="panel-body">
                        <div id="splineArea-chart" style="height:280px;"></div>
                      </div>
                    </div>

                </div>
                <div class="col-lg-4">
                
                	<div class="panel panel-default" data-ng-controller="TodoCtrl">
                    	<div class="panel-heading un-bold"><h4>ToDo List <small class="text-gray">{{remaining()}} of {{todos.length}} remaining</small>  <a href="" data-ng-click="archive()" class="pull-right"><small>archive</small></a></h4></div>
                        <div class="panel-body">
                         <ul class="list-group no-margn nicescroll todo-list" style="height:205px; overflow:auto;">
                            <li data-ng-repeat="todo in todos" class="list-group-item">
                            <label class="cr-styled">
                            	<input type="checkbox" data-ng-model="todo.done">
                                <i class="fa"></i>
                            </label>
                            <span class="done-{{todo.done}}">{{todo.text}}</span>
                            </li>
                         </ul>
                        </div>
                        
                        <div class="panel-footer">
                            <form data-ng-submit="addTodo()" role="form">
                            <div class="input-group">
                              <input type="text" data-ng-model="todoText" class="form-control" placeholder="add new todo here">
                              <span class="input-group-btn">
                                <button class="btn-primary btn" type="submit" >Add</button>
                              </span>
                            </div>
                            </form>
                        </div>
                        
                        
                    </div>
                
                </div>
            </div>-->
            <div class="row">
              <div class="col-md-6">
                    <div class="panel panel-default">
                          <div class="panel-heading">Biotipos</div>
                          <div class="panel-body">
                            <div id="biotipo" style="height:250px;"></div>
                          </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="panel panel-default">
                          <div class="panel-heading">Sexo</div>
                          <div class="panel-body">
                            <div id="sexo" style="height:250px;"></div>
                          </div>
                      </div>
              </div>
            </div>
            </div>
            
            <div class="row">
            	<div class="col-lg-6">
                
                	<div class="row">
                    	<div class="col-lg-6">
                        	<div class="panel panel-default">
                            	<div class="panel-body text-center">
                                	<h5 class="no-margn"><strong>WoW Revenue</strong></h5>
                                    <p class="text-muted"><small>total 153,248</small></p>
                                    <div id="dashboard-stats-sparkline5"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        	<div class="panel panel-default">
                            	<div class="panel-body text-center">
                                	<h5 class="no-margn"><strong>Sessions Count</strong></h5>
                                    <p class="text-muted"><small>total 153,248</small></p>
                                    <div id="dashboard-stats-sparkline6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-lg-12">
                        	<div class="panel panel-default">
                            	<div class="panel-heading">Task's in progress</div>
                            	<div class="panel-body">
                                    
                                    <p><strong>Loading Server Data</strong> <small class="text-muted">45% completed</small></p>
                                    <div class="progress progress-xs progress-striped active">
                                      <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar">
                                        <span class="sr-only">45% Complete</span>
                                      </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="row">
                                    	<div class="col-lg-4">
                                        	<p><strong>40%</strong> Task one</p>
                                            <div class="progress progress-xs no-margn">
                                              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                        	<p><strong>60%</strong> Task two</p>
                                            <div class="progress progress-xs no-margn">
                                              <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                        	<p><strong>80%</strong> Task three</p>
                                            <div class="progress progress-xs no-margn">
                                              <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
 
                                </div>
                            </div>
                        </div>
                    </div>
                	
                    <div class="row">
                    	<div class="col-lg-12">
                        	<div class="panel panel-default">
                            	<div class="panel-body" id="demo-map-2" style="height:280px;" >
                                	
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                
                	
                
                	
                	
                </div>
                <div class="col-lg-6">
                
                	<ul class="nav nav-tabs" role="tablist">
                      <li class="active"><a href="#messages" role="tab" data-toggle="tab">Messages</a></li>
                      <li><a href="#appointments" role="tab" data-toggle="tab">Appointments</a></li>
                      <li><a href="#activities" role="tab" data-toggle="tab"><span class="hidden-xs">Recent</span> Activities</a></li>
                    </ul>
                    
                    <div class="tab-content">
                    
                        <div class="panel panel-default tab-pane tabs-up active" id="messages">
                            <div class="panel-body">
                            
                            	
                                <ul class="media-list messages nicescroll">
                                    <li class="media">
                                      <a href="#" class="pull-left user-status online">
                                        <img alt="user" class="media-object" src="assets/images/avtar/user2.png">
                                      </a>
                                      <div class="media-body">
                                        <h5 class="media-heading"><strong>Maximo Mccall</strong></h5>
                                        <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                      </div>
                                    </li>
                                    <li class="media">
                                      <a href="#" class="pull-right user-status offline">
                                        <img alt="user" class="media-object" src="assets/images/avtar/user3.png">
                                      </a>
                                      <div class="media-body">
                                        <h5 class="media-heading"><strong>Brice Rodriquez</strong></h5>
                                        <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                      </div>
                                    </li>
                                    <li class="media">
                                      <a href="#" class="pull-left user-status invisibled">
                                        <img alt="user" class="media-object" src="assets/images/avtar/user4.png">
                                      </a>
                                      <div class="media-body">
                                        <h5 class="media-heading"><strong>Garfield Abbott</strong></h5>
                                        <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                        <div class="media">
                                          <a href="#" class="pull-left user-status online">
                                            <img alt="user" class="media-object" src="assets/images/avtar/user5.png">
                                          </a>
                                          <div class="media-body">
                                            <h5 class="media-heading"><strong>Wilbert Melton</strong></h5>
                                            <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                          </div>
                                        </div>
                                        <div class="media">
                                          <a href="#" class="pull-left user-status online">
                                            <img alt="user" class="media-object" src="assets/images/avtar/user6.png">
                                          </a>
                                          <div class="media-body">
                                            <h5 class="media-heading"><strong>Felecia Oconnell</strong></h5>
                                            <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="media">
                                      <a href="#" class="pull-left online">
                                        <img alt="user" class="media-object" src="assets/images/avtar/user.png">
                                      </a>
                                      <div class="media-body">
                                        <h5 class="media-heading"><strong>Media heading</strong></h5>
                                        <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                      </div>
                                    </li>
                                </ul>
                            
                            </div>
                            <div class="panel-footer">
                            	<form role="form">
                                <div class="input-group">
                                  <input type="text" placeholder="Message here..." class="form-control" data-ng-model="todoText">
                                  <span class="input-group-btn">
                                    <button type="submit" class=" btn-success btn">Send</button>
                                  </span>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- Messages Tab Ends -->
                        

                        <div class="panel panel-default padd-t-sm tab-pane tabs-up" id="appointments">
                    		
                            <div class="panel-heading clean clearfix text-center">
                            <div class="btn-group pull-left">
                                <button class="btn btn-default btn-sm" data-calendar-nav="prev">&lt; Prev</button>
                                <button class="btn btn-sm btn-default" data-calendar-nav="today">Today</button>
                                <button class="btn btn-sm btn-default" data-calendar-nav="next">Next &gt;</button>
                            </div>
                            <b class="calender-title"></b> 
                            <div class="btn-group pull-right">
                                <button class="btn btn-sm btn-default" data-calendar-view="year">Year</button>
                                <button class="btn btn-sm btn-default active" data-calendar-view="month">Month</button>
                                <button class="btn btn-sm btn-default" data-calendar-view="week">Week</button>
                                <button class="btn btn-sm btn-default" data-calendar-view="day">Day</button>
                            </div>
                            </div>
    
                            <div class="panel-body">
                                <div id="calendar"></div>
                            </div>
                        
                    	</div>
                        <!-- Calendar Tab Ends -->
                        
                        
                        <div class="panel panel-default tab-pane tabs-up" id="activities">
                            <div class="panel-body">
                            	<ul class="activities-list list-unstyled nicescroll">
                                	<li class="default-activity">
                                    	<span class="time">moments ago</span>
                                        <p><a href="#">Akshay</a> commented your post.</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                          <button type="button" class="btn btn-default btn-xs">Actions</button>
                                          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                          </ul>
                                        </div>
                                    </li>
                                    <li class="info-activity">
                                    	<span class="time">min ago</span>
                                        <p class="text-info">Call to customer Jacob and discuss the detail.</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                          <button type="button" class="btn btn-default">Actions</button>
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                          </ul>
                                        </div>
                                    </li>
                                    <li class="warning-activity">
                                    	<span class="time">10mins ago</span>
                                        <p class="text-warning">Jessi assign you a <span class="label label-info">task Mockup</span> Design.</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                          <button type="button" class="btn btn-default">Actions</button>
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                          </ul>
                                        </div>
                                    </li>
                                    <li class="default-activity">
                                    	<span class="time">8hrs ago</span>
                                        <p>Integer ut consequat nulla. Etiam aliquam</p>
                                        <div class="btn-group  btn-group-xs activity-actions">
                                          <button type="button" class="btn btn-default">Actions</button>
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                          </ul>
                                        </div>
                                    </li>
                                    <li class="danger-activity">
                                    	<span class="time">9hrs ago</span>
                                        <p>Lorem ipsum dolor sit amet, <span class="label label-success">consectetur</span> adi...</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                          <button type="button" class="btn btn-default">Actions</button>
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                          </ul>
                                        </div>
                                    </li>
                                    <li class="success-activity">
                                    	<span class="time">Thu, 28 Jan</span>
                                        <p>Nam pretium id sem ut convallis. </p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                          <button type="button" class="btn btn-default">Actions</button>
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                          </ul>
                                        </div>
                                    </li>
                                    <li class="primary-activity">
                                    	<span class="time">Wed, 17 Jan</span>
                                        <p class="text-purple">Maecenas finibus est eget neque pharetra.</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                          <button type="button" class="btn btn-default">Actions</button>
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                          </ul>
                                        </div>
                                    </li>
                                    <li class="default-activity">
                                    	<span class="time">Tue, 23 Jan</span>
                                        <p>Integer ut consequat nulla. Etiam aliquam...</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                          <button type="button" class="btn btn-default">Actions</button>
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                          </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
        <footer class="container-fluid footer">
        	Copyright &copy; 2014 <a href="http://freakpixels.com/" target="_blank">FreakPixels</a>
            <a href="#" class="pull-right scrollToTop"><i class="fa fa-chevron-up"></i></a>
        </footer>
        
    
    </section>
    <!-- Content Block Ends Here (right box)-->
    
    
    <!-- JQuery v1.9.1 -->
	<script src="assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Globalize -->
    <script src="assets/js/globalize/globalize.min.js"></script>
    
    <!-- NanoScroll -->
    <script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    
    <!-- Chart JS -->
    <script src="assets/js/plugins/DevExpressChartJS/dx.chartjs.js"></script>
    <script src="assets/js/plugins/DevExpressChartJS/world.js"></script>
   	<!-- For Demo Charts -->
    <script src="assets/js/plugins/DevExpressChartJS/demo-charts.js"></script>
    <script src="assets/js/plugins/DevExpressChartJS/demo-vectorMap.js"></script>
    
    <!-- Sparkline JS -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- For Demo Sparkline -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.demo.js"></script>
    
    <!-- Angular JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js"></script>
    <!-- ToDo List Plugin -->
    <script src="assets/js/angular/todo.js"></script>
    
    
    
    <!-- Calendar JS -->
    <script src="assets/js/plugins/calendar/calendar.js"></script>
    <!-- Calendar Conf -->
    <script src="assets/js/plugins/calendar/calendar-conf.js"></script>
	
    
    
    <!-- Custom JQuery -->
	<script src="assets/js/app/custom.js" type="text/javascript"></script>
    

    
	<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-56821827-1', 'auto');
    ga('send', 'pageview');
    


    // GRAFICOS
    


    // Exemplo

    function dez(){
      return 10; // Uma function qualquer retornando o valor 10

    }
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawChart2);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [' ', ' '],
          ['Masculino',     dez()], // Atribuindo o valor 10 como valor para o grafico
          ['Feminino',      50],

        ]);

        var options = {
          pieHole: 0.4,
          colors: ['#3272AB','#DE453A'],
        };

        var chart = new google.visualization.PieChart(document.getElementById('sexo'));
        chart.draw(data, options);
      };


       
      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          [' ', ' '],
          ['ectamorfo',     50],
          ['mesomorfo',      50],
          ['endomorfo',    50],

        ]);

        var options = {
          
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('biotipo'));
        chart.draw(data, options);
      }
   
      
    </script>
</body>
</html>