<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Zona PC Software</title>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="assets/lib/html5shiv/html5shiv.js"></script>
      <script src="assets/lib/respond/respond.min.js"></script>
      <![endif]-->

    <!--For Development Only. Not required -->
    <script>
      less = {
        env: "development",
        relativeUrls: false,
        rootpath: "../assets/"
      };
    </script>
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.2.0/less.min.js"></script>

    <!--Modernizr-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  </head>
  <body class="  ">
    <div class="bg-dark dk" id="wrap">
      <div id="top">

        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
              </button>
              <a href="index.html" class="navbar-brand">
                <div class="logo">Zona PC Software</div>
              </a> 
            </header>
            <div class="topnav">
              <div class="btn-group">
            <!--     <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                  <i class="glyphicon glyphicon-fullscreen"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-warning">5</span> 
                </a> 
                <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-comments"></i>
                  <span class="label label-danger">4</span> 
                </a> 
                <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                  <i class="fa fa-question"></i>
                </a> 
              </div> -->
              <div class="btn-group">
                <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                  <i class="fa fa-power-off"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                  <i class="fa fa-bars"></i>
                </a> 
            <!--     <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip" class="btn btn-default btn-sm toggle-right"> <span class="glyphicon glyphicon-comment"></span>  </a> 
              </div> -->
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

              <!-- .nav -->
<!--               <ul class="nav navbar-nav">
                <li> <a href="dashboard.html">Dashboard</a>  </li>
                <li> <a href="table.html">Tables</a>  </li>
                <li> <a href="file.html">File Manager</a>  </li>
                <li class='dropdown '>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Form Elements
                    <b class="caret"></b>
                  </a> 
                  <ul class="dropdown-menu">
                    <li> <a href="form-general.html">General</a>  </li>
                    <li> <a href="form-validation.html">Validation</a>  </li>
                    <li> <a href="form-wysiwyg.html">WYSIWYG</a>  </li>
                    <li> <a href="form-wizard.html">Wizard &amp; File Upload</a>  </li>
                  </ul>
                </li>
              </ul> -->
              <!-- /.nav -->
            </div>
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar -->
        <header class="head">
          <div class="main-bar">
            <h3>
              <i class="fa fa-home"></i>&nbsp; Menú principal</h3>
          </div><!-- /.main-bar -->
        </header><!-- /.head -->
      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media bg-dark dker">
          <div class="user-media-toggleHover">
            <span class="fa fa-user"></span> 
          </div>
          <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
              <i class="fa fa-user fa-5x"></i>
            </a> 
            <div class="media-body">
              <ul class="list-unstyled user-info">
                <li> <a href="">Administrador</a>  </li>
                <li>Ultimo acceso :
                  <br>
                  <small>
                    <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small> 
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- #menu -->
        <ul id="menu" class="bg-blue dker">
          <li class="nav-header">Menú</li>
          <li class="nav-divider"></li>
          <li class="active">
            <a href="index.html">
              <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Inicio</span> 
            </a> 
          </li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-list-alt"></i>
              <span class="link-title"> Inventario</span> 
              <span class="fa arrow"></span>
            </a> 
            <ul class="collapse" aria-expanded="false" style="height: 0px;">
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul class="collapse">
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li>
                    <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a> 
                    <ul class="collapse">
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li>
                        <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a> 
                        <ul class="collapse">
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li>
                            <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a> 
                            <ul class="collapse">
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li> <a href="javascript:;">Level 4</a>  </li>
                    </ul>
                  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
              <li> <a href="javascript:;">Level 1</a>  </li>
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul class="collapse">
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="">
            <a href="javascript:;">
              <i class="fa fa-file-text-o"></i>
              <span class="link-title"> Control de Facturas</span> 
              <span class="fa arrow"></span>
            </a> 
            <ul class="collapse" aria-expanded="false" style="height: 0px;">
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul class="collapse">
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li>
                    <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a> 
                    <ul class="collapse">
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li>
                        <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a> 
                        <ul class="collapse">
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li>
                            <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a> 
                            <ul class="collapse">
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li> <a href="javascript:;">Level 4</a>  </li>
                    </ul>
                  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
              <li> <a href="javascript:;">Level 1</a>  </li>
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul class="collapse">
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
            </ul>
          </li>

        <li class="">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span class="link-title"> Nomina</span> 
              <span class="fa arrow"></span>
            </a> 
            <ul class="collapse" aria-expanded="false" style="height: 0px;">
              <li>
                <a href="ficha_empleado.html">Empleados</a> 
              </li>
              <li> <a href="javascript:;">Level 1</a>  </li>
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul class="collapse">
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="">
            <a href="javascript:;">
              <i class="fa fa fa-bar-chart-o"></i>
              <span class="link-title"> Estado Financiero</span> 
              <span class="fa arrow"></span>
            </a> 
            <ul class="collapse" aria-expanded="false" style="height: 0px;">
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul class="collapse">
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li>
                    <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a> 
                    <ul class="collapse">
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li>
                        <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a> 
                        <ul class="collapse">
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li>
                            <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a> 
                            <ul class="collapse">
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li> <a href="javascript:;">Level 4</a>  </li>
                    </ul>
                  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
              <li> <a href="javascript:;">Level 1</a>  </li>
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul class="collapse">
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
            </ul>
            </li>

        <!-- /#menu -->
      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="col-lg-12">
              <!--  MENU CON BOTONES DE CADA SISTEMITA -->
            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      <div id="right" class="bg-light lter">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Warning!</strong>  Best check yo self, you're not looking too good.
        </div>

        <!-- .well well-small -->
        <div class="well well-small dark">
          <ul class="list-unstyled">
            <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span> </li>
            <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span> </li>
            <li>Popularity <span class="dynamicbar pull-right">Loading..</span> </li>
            <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span> </li>
          </ul>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <button class="btn btn-block">Default</button>
          <button class="btn btn-primary btn-block">Primary</button>
          <button class="btn btn-info btn-block">Info</button>
          <button class="btn btn-success btn-block">Success</button>
          <button class="btn btn-danger btn-block">Danger</button>
          <button class="btn btn-warning btn-block">Warning</button>
          <button class="btn btn-inverse btn-block">Inverse</button>
          <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
          <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
          <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
          <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
          <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
          <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <span>Default</span> <span class="pull-right"><small>20%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
          </div>
          <span>Success</span> <span class="pull-right"><small>40%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
          </div>
          <span>warning</span> <span class="pull-right"><small>60%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
          </div>
          <span>Danger</span> <span class="pull-right"><small>80%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
          </div>
        </div>
      </div><!-- /#right -->
    </div><!-- /#wrap -->
    <footer class="Footer bg-dark dker">
      <p>© Copyright 2016 Zona PC. Todos los Derechos Reservados.</p>
    </footer><!-- /#footer -->

    <!-- #helpModal -->
    <div id="helpModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->

    <!--jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!--Bootstrap -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- MetisMenu -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.js"></script>

    <!-- Screenfull -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/screenfull.js/2.0.0/screenfull.min.js"></script>

    <!-- Metis core scripts -->
    <script src="assets/js/core.min.js"></script>

    <!-- Metis demo scripts -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/style-switcher.min.js"></script>
  </body>