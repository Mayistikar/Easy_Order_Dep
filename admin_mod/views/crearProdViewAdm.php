<!--
PROYECTO EASY ORDER

Módulo:
Documento: "crearProdViewAdm.php"  Version:  1.0.
Descripción:
Autor: andersonrodriguezce@gmail.com.
Fecha creación: 19/10/2017 | 12:41:20 PM.
-->

<!-- AGREGANDO ESTILOS DATETIMEPICKER -->
<link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/bootstrap/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/bootstrap/css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/bootstrap/css/bootstrap-toggle.min.css">     
<!-- AGREGANDO ESTILOS DATETIMEPICKER -->
    <div class="container col-md-9">
        <article>                
            
            <center>
                <h1><span class="label label-success">REGISTRAR PRODUCTO</span></h1>
                <br>
            </center>
            
            <div class="container">

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
					  <h2>
					  	<span class="label label-success">
					  		<i class="glyphicon glyphicon-ok"></i>
					  		El producto ha sido creado exitosamente!
					  	</span>
					  </h2>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-success" data-dismiss="modal">
					  	<i class="glyphicon glyphicon-thumbs-up"></i>
					  	OK
					  </button>
					</div>
				  </div>

				</div>
			  </div>

			</div>
            
            <form action=" <?= $superController->setController("Crearprod", "Guardarprod") ?>" method="post" onsubmit="return onSubmit()">
            <div class="container col-md-12 col-bg-offset-1">
            <span style="display:none;" id="modal-success"><?=$id?></span>       
                
                <!-- COLUMNA1 -->
                <div class="col-md-6 form-group">
                    
                    <div class="form-group">
						<div class="input-group" >                       
							<span class="control-label  input-group-addon list-group-item-success" id="label-codProd">Código</span>
							<input class="form-control" type="number" name="codProd" id="codProd"> 
						</div>
                    	<b><span class="help-block" id="msj-codProd"></span></b>
                    </div>                      					              
                    
                    <div class="form-group">
						<div class="input-group" >                       
							<span class="control-label  input-group-addon list-group-item-success" id="label-nomProd">Nombre</span>
							<input class="form-control" type="text" name="nomProd" id="nomProd"> 
						</div>
                    	<b><span class="help-block" id="msj-nomProd"></span></b>
                    </div>
                    
		            <div class="form-group">
						<div class="input-group" >                       
							<span class="control-label  input-group-addon list-group-item-success" id="label-precProd">Precio</span>
							<input class="form-control" type="number" name="precProd" id="precProd"> 
						</div>
                    	<b><span class="help-block" id="msj-precProd"></span></b>
                    </div> 
                    
		            <div class="form-group">
						<div class="input-group" >                       
							<span class="control-label  input-group-addon list-group-item-success" id="label-ivaProd">I.V.A</span>
							<input class="form-control" type="number" name="ivaProd" id="ivaProd"> 
						</div>
                    	<b><span class="help-block" id="msj-ivaProd"></span></b>
                    </div>                     
                    
                    <div class="form-group">
						<div class="input-group" >                       
							<span class="control-label  input-group-addon list-group-item-success" id="label-marcProd">Marca</span>
							<input class="form-control" type="text" name="marcProd" id="marcProd"> 
						</div>
                    	<b><span class="help-block" id="msj-marcProd"></span></b>
                    </div>                                                                  
                    
					<div class="form-group">                   
						<div class="input-group">
							<span class="input-group-addon list-group-item-success" id="label-fechaProd">Vencimiento</span>
							<div class="input-group date fj-date" >
								<input type="text" class="form-control" name="fechaProd" id="fechaProd" >
								<span class="input-group-addon" id="iconDate">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>							
						</div>
                   		<b><span class="help-block" id="msj-fechaProd"></span></b>				
                    </div>                    
                    
                                                               
					<div class="form-group">                   
						<div class="input-group">
							<span class="input-group-addon list-group-item-success" id="label-tPrep">Tiempo Preparación</span>
							<div class="input-group clockpicker" >
								<input type="text" class="form-control" value="HH:MM" name="tPrep" id="tPrep" >
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-time"></span>
								</span>
							</div>							
						</div>
                   		<b><span class="help-block" id="msj-tPrep"></span></b>				
                    </div>  
                    
                    <div class="form-group">
						<div class="input-group" >                       
							<span class="control-label  input-group-addon list-group-item-success" id="label-ingredProd">Ingredientes</span>
							<textarea class="form-control" rows="1" type="text" name="ingredProd" id="ingredProd"></textarea>
						</div>
                    	<b><span class="help-block" id="msj-ingredProd"></span></b>
                    </div>                                                                                                                                                        
                </div>
                <!-- FIN COLUMNA1 -->
                
                <!-- COLUMNA2 -->                
                <div class="col-md-6 form-group">
                  
		            <div class="form-group">
						<div class="input-group" >                       
							<span class="control-label  input-group-addon list-group-item-success" id="label-cantProd">Cantidad</span>
							<input class="form-control" type="number" name="cantProd" id="cantProd"> 
						</div>
                    	<b><span class="help-block" id="msj-cantProd"></span></b>
                    </div>                                        
                   

                    <div class="form-group">                   
                   	<div class="input-group "> <!-- INPUT GROUP OBLIGATORIO PARA BOTONES SOLOS O EN LINEA -->
                        <!-- Split button -->                        
                        <div class="btn-group" id="btn-unMedProd">
                            <button type="button" id="btn-dd" class="btn btn-danger">
                            	<span id="label-btnMedProd">UNIDAD DE MEDIDA.</span>
                            	<input type="hidden" id="unMedProd" name="unMedProd"></input>   
                            </button>
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btnMedProd">
                               &nbsp;
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu btn-prep" aria-labelledby="dropdownMenu1">
                                <?php foreach ($uns_medida as $value){ ?>
                                    <li>
                                        <a href="#" class="select">
                                            <?= $value ?>
                                        </a>
                                    </li>
                                <?php }?>                                
                            </ul>
                        </div>    
							<!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->
                            <b><span class="help-block" id="msj-btnMedProd"></span></b>
                            <!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->                         
                   		</div>                    
				   	</div> 
                    
                   <div class="form-group">                   
                   	<div class="input-group "> <!-- INPUT GROUP OBLIGATORIO PARA BOTONES SOLOS O EN LINEA -->
                        <!-- Split button -->                        
                        <div class="btn-group" id="btn-tiProd">
                            <button type="button" id="btn-dd" class="btn btn-danger">
                            	<span id="label-btnTiProd">TIPO DE PRODUCTO.</span>
                            	<input type="hidden" id="tiProd" name="tiProd"></input>   
                            </button>
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btnTiProd">
                               &nbsp;
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu btn-prep" aria-labelledby="dropdownMenu1">
                                <?php foreach ($tipo_prods as $value){ ?>
                                    <li>
                                        <a href="#" class="select">
                                            <?= $value ?>
                                        </a>
                                    </li>
                                <?php }?>                                
                            </ul>
                        </div>    
							<!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->
                            <b><span class="help-block" id="msj-btnTiProd"></span></b>
                            <!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->                         
                   		</div>                    
				   	</div> 
               
              
                    <div class="form-group">
						<div class="input-group" >                       
							<span class="control-label  input-group-addon list-group-item-success" id="label-descProd">Descripción</span>
							<textarea class="form-control" rows="4" type="text" name="descProd" id="descProd"></textarea>
						</div>
                    	<b><span class="help-block" id="msj-descProd"></span></b>
                    </div>                                                                        
                    
                    
                   <div class="form-group">                   
                   	<div class="input-group "> <!-- INPUT GROUP OBLIGATORIO PARA BOTONES SOLOS O EN LINEA -->
                        <!-- Split button -->                        
                        <div class="btn-group" id="btn-promProd">
                            <button type="button" id="btn-dd" class="btn btn-danger">
                            	<span id="label-btnPromProd">PROMOCIÓN.</span>
                            	<input type="hidden" id="promProd" name="promProd"></input>   
                            </button>
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btnPromProd">
                               &nbsp;
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu btn-prep" aria-labelledby="dropdownMenu1">
                                <?php foreach ($promos as $value){ ?>
                                    <li>
                                        <a href="#" class="select">
                                            <p><?= $value ?></p>
                                        </a>
                                    </li>
                                <?php }?>                                
                            </ul>
                        </div>    
							<!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->
                            <b><span class="help-block" id="msj-btnPromProd"></span></b>
                            <!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->                         
                   		</div>                    
				   	</div> 
                    

				   <div class="form-group">                   
                   	<div class="input-group "> <!-- INPUT GROUP OBLIGATORIO PARA BOTONES SOLOS O EN LINEA -->
                        <!-- Split button -->                        
                        <div class="btn-group" id="btn-comProd">
                            <button type="button" id="btn-dd" class="btn btn-danger">
                            	<span id="label-btnComProd">COMBO.</span>
                            	<input type="hidden" id="comProd" name="comProd"></input>   
                            </button>
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btnComProd">
                               &nbsp;
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu btn-prep" aria-labelledby="dropdownMenu1">
                                <?php foreach ($combos as $value){ ?>
                                    <li>
                                        <a href="#" class="select">
                                            <?= $value ?>
                                        </a>
                                    </li>
                                <?php }?>                                
                            </ul>
                        </div>    
							<!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->
                            <b><span class="help-block" id="msj-btnComProd"></span></b>
                            <!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->                         
                   		</div>                    
				   	</div> 
              
              
					  <div class="form-group">
						<div class="input-group">
							<h3><span class="label label-success acceso">INCLUIR EN EL MENÚ:</span></h3>
						  
							  <div class="form-group">
								<input type="checkbox" class="form-control" checked data-toggle="toggle" data-on="INCLUIR" data-off="NO INCLUIR" data-onstyle="success" data-offstyle="danger" data-size="mini" data-width="100" name="activoProd"> 
							  </div>
					    </div>						   							    			  			  
					  </div>
               
                </div>
                <!-- FIN COLUMNA2 -->
                                     
                <!-- BOTON SUBMIT -->
                <button type="submit" class="btn btn-success btn-lg btn-block">
                	<i class="glyphicon glyphicon-floppy-saved"></i> 
                	GUARDAR PRODUCTO
                </button>            	
            	<br>
            </div>
        </form>    
        </article> 
    </div>
           
    </section>
</div>

<!-- AGREGANDO FUNCIONES DATETIMEPICKER -->        
<script src="/Easy_Order_Dev_ARC/lib/bootstrap/js/bootstrap-clockpicker.min.js"></script>
<script src="/Easy_Order_Dev_ARC/lib/bootstrap/js/bootstrap-datepicker.min.js"></script>
<script src="/Easy_Order_Dev_ARC/lib/bootstrap/js/bootstrap-datepicker.es.min.js"></script>
<script src="/Easy_Order_Dev_ARC/lib/js/dateTimePicker.js"></script>
<!-- AGREGANDO FUNCIONES DATETIMEPICKER -->

<!-- AGREGANDO SPLIT BUTTON -->

<script src="/Easy_Order_Dev_ARC/lib/js/splitBtnGral.js"></script>

<!-- AGREGANDO SPLIT BUTTON -->

<!-- AGREGANDO TOGGLE BUTTON -->
<script src="/Easy_Order_Dev_ARC/lib/bootstrap/js/bootstrap-toggle.min.js"></script>
<!-- AGREGANDO TOGGLE BUTTON -->

<!-- AGREGANDO FUNCIONES VALIDACION -->
<script src="/Easy_Order_Dev_ARC/lib/js/validador.js"></script>
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/validarFormProd.js"></script>



<!-- AGREGANDO FUNCIONES VALIDACION -->


<!-- AGREGANDO FUNCIONES GENERALES -->

<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/default.js"></script>

<!-- AGREGANDO FUNCIONES GENERALES -->