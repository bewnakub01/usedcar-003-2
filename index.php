<?php
    session_start();
    include("connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Soi5 Used Cars 003</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>
</head>
<body>

    <!--<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Jaidee Shop</a>
            </div>
--> 
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Soi 5 Used Cars 003</a>
        </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <?php
                    if(isset($_SESSION['id'])){
                    ?>

                    <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-user"></i>
                        Welcome <?php echo $_SESSION['name'] ?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Shop</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                    </li>
                    <li>
                    
                        <a href="#">
                            <i class="glyphicon glyphicon-shopping-cart"></i> (0)
                        </a>
                    </li>
                    <?php
                    }
                    else{
                    ?>

                    <li><a href="login.php">Login</a></li>
                    <li><a href="Register.php">Sign in</a></li>

                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
        
    </nav>

    <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="text-center">
                        <a href="#s">รถยนต์ของเรา</a>
                    </li>
                    <li>
                        <a href="index.php?menu=show" class="active"><i class="fa fa-car fa-fw"></i> รถทุกประเภท</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div id="page-wrapper">
        <div class="container-fluid">
        <br><br>
        <?php
            if(isset($_GET["menu"])){
                $menu=$_GET["menu"];
            }
            else{
                $menu="";
            }
            switch($menu){
                case "show":{
                    $page="show.php";
                    break;
                }
                case "insert":{
                    $page="insertPro.php";
                    break;
                }
                case "edit":{
                    $page="editproduct.php";
                    break;
                }
                default:{
                    $page="show.php";
                }
            }
                include($page);
            ?>           

                        
        </div>
    </div>
</div>


</body>
</html>