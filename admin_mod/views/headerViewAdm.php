<!DOCTYPE html>
<!--
PROYECTO EASY ORDER

Módulo: Administrador
Documento: "headerViewAdm.php"  Version:  1.0.
Descripción: Vista plantilla general para pintar el header y el background de todas
las vistas que se rendericen en el módulo administrador.

Autor: andersonrodriguezce@gmail.com.
Fecha creación: 30/09/2017 | 04:02:54 AM.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EASY ORDER</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- AGREGANDO BOOTSTRAP -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/admin_mod/views/css/bootstrap.css">
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/admin_mod/views/css/bootstrap-theme.css">
        
        <script src="/Easy_Order_Dev_ARC/admin_mod/views/js/jquery.js"></script>
        <script src="/Easy_Order_Dev_ARC/admin_mod/views/js/bootstrap.min.js"></script>
        <!-- AGREGANDO BOOTSTRAP -->
        
        <!-- AGREGANDO ESTILOS -->
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/admin_mod/views/css/misestilosadm.css">
        <!-- AGREGANDO ESTILOS --> 
                       
		<!-- AGREGANDO ESTILOS ALERTIFY -->
		<link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/alertifyjs/css/alertify.min.css">
		<link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/alertifyjs/css/themes/bootstrap.min.css">
		<!-- AGREGANDO ESTILOS ALERTIFY -->   
   
        <!-- AGREGANDO FUNCIONES ALERTIFYJS -->
		<script src="/Easy_Order_Dev_ARC/lib/alertifyjs/alertify.min.js"></script>
		<!-- AGREGANDO FUNCIONES ALERTIFYJS -->       
    </head>
    <body>
        <header>           
           
            <div class="container">
                <br>
                <nav class="nav navbar">
                    <!---  LOGO EO  --->
                    <div class="container-fluid col-md-3 col-sm-4">
                        <a  class="navbar-brand" href="#">
                            <img src="/Easy_Order_Dev_ARC/admin_mod/views/img/EOlogoXSWFondo3.png">
                        </a>                        
                    </div>
                    <!---  LOGO EO  --->
                   
                    <!---  NAVBAR  --->
                    <div class="container-fluid usuario col-md-9 col-sm-8">
                        <div class="nav ">                    
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle colordrop" data-toggle="dropdown" role="button">
                                        <i class="glyphicon glyphicon-user"></i>
                                        Admin
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu user-nav">
                                        <li>
                                            <?php if(!isset($superController)){?>                                
                                                <a href="" role="button">
                                                Salir
                                                </a>
                                            <?php }else{?>
                                                <a href=" <?=$superController->setControllerLog()?> " >Salir</a>
                                            <?php }?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>                        
                        </div>                             
                    </div>
                    <!---  NAVBAR  --->                    
                </nav>
            </div>
        </header>