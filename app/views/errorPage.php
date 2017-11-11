<!DOCTYPE html>
<!--
PROYECTO EASY ORDER

Módulo:
Documento: "errorPage.php"  Version:  1.0.
Descripción:
Autor: andersonrodriguezce@gmail.com.
Fecha creación: 21/10/2017 | 04:23:24 AM.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EASY ORDER</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- AGREGANDO BOOTSTRAP -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/bootstrap/css/bootstrap-theme.css">
        
        <script src="/Easy_Order_Dev_ARC/lib/bootstrap/js/jquery.js"></script>
        <script src="/Easy_Order_Dev_ARC/lib/bootstrap/js/bootstrap.min.js"></script>
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
       			  <!-- Modal -->
			  <div class="modal fade" id="myModalConfirm" role="dialog">
				<div class="modal-dialog">

				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
				  
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					    <a  class="navbar-brand" href="#">
                            <img src="/Easy_Order_Dev_ARC/admin_mod/views/img/EOlogoXSWFondo3.png">
                        </a>   
					</div>
					<div class="modal-body">									

		<h2><b> <?= $msj ?>  </b></h2>
        
            <script type="text/javascript">
				
				$('#myModalConfirm').modal('show');
				
                alertify.error("<span><h4><i class='glyphicon glyphicon-thumbs-down'></i> OOPS! POR FAVOR NOTIFICAR AL CORREO (easy_order@gmail.com)</h4></span>");
				
				function relocate_home(){	 
				window.location.replace("/Easy_Order_Dev_ARC/public/");                  
				}
				
            </script> 
                			
					</div>
					<div class="modal-footer">
					<input type="button" class="btn btn-danger" value="CERRAR" onclick=" relocate_home()" data-dismiss="modal">
					</div>
				  </div>

				</div>
			  </div>

			</div>
			 
    </body>
</html>
