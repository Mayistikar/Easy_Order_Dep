<!DOCTYPE html>
<!--
PROYECTO EASY ORDER

Módulo:
Documento: "detalleUserViewAdm.php"  Version:  1.0.
Descripción:
Autor: andersonrodriguezce@gmail.com.
Fecha creación: 19/10/2017 | 07:38:50 AM.
-->
<div class="container">

	<!-- Modal -->
	<div class="modal fade" id="modalDetaUser" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header modal-header-warning">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<a class="navbar-brand" href="#">
						<img src="/Easy_Order_Dev_ARC/admin_mod/views/img/EOlogoXSWFondo3.png">
					</a>
				</div>

				<div class="modal-body">
                                    
                                <!-- PANEL DATOS PERSONALES -->                   
                                <div class="panel panel-info">

                                    <div class="panel-heading" role="tab" id="heading1">
                                        <h4 class="panel-title">
                                            <a href="#collapsePers" data-toggle="collapse" data-parent="#acordion">
                                               <i class="glyphicon glyphicon-file"></i>
                                                Datos Personales
                                            </a>
                                        </h4>
                                    </div>                                                

                                    <div id="collapsePers" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            
                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-info">
                                            PRIMER NOMBRE:                                                        
                                            </span>
                                              <p class="text-info" id="nomdet1"></p>
                                              
                                            <span class="label label-info">
                                            PRIMER APELLIDO:                                                        
                                            </span>
                                            <p class="text-info" id="apedet1"></p>                                                                                        
                                            
                                            <span class="label label-info">
                                            NUMERO DE DOCUMENTO:                                                        
                                            </span>
                                            <p class="text-info" id="docdet"></p>                                            
                                            
                                          </div>      
                                            
                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-info">
                                            SEGUNDO NOMBRE:                                                        
                                            </span>
                                            <p class="text-info" id="nomdet2"></p>
                                            
                                            <span class="label label-info">
                                            SEGUNDO APELLIDO:                                                        
                                            </span>
                                            <p class="text-info" id="apedet2"></p>
                                            
                                            <span class="label label-info">
                                            TIPO DE DOCUMENTO:                                                        
                                            </span>
                                            <p class="text-info" id="TipDocdet"></p>                                            
                                            
                                          </div>   

                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-info">
                                            GENERO:                                                        
                                            </span>
                                            <p class="text-info" id="gendet"></p>
                                            
                                            <span class="label label-info">
                                            FECHA DE NACIMIENTO:                                                        
                                            </span>
                                            <p class="text-info" id="fechadet"></p>
                                            
                                          </div>                                               
                                            
                                        </div>
                                    </div>                          

                                </div>
                                  
                                <!-- PANEL DATOS DE CONTACTO -->                   
                                <div class="panel panel-info">

                                    <div class="panel-heading" role="tab" id="heading1">
                                        <h4 class="panel-title">
                                            <a href="#collapseContact" data-toggle="collapse" data-parent="#acordion">
                                               <i class="glyphicon glyphicon-file"></i>
                                                Datos de Contacto
                                            </a>
                                        </h4>
                                    </div>                                                

                                    <div id="collapseContact" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            
                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-info">
                                            CELULAR:                                                        
                                            </span>
                                              <p class="text-info" id="celdet"></p>
                                              
                                          </div>      
                                            
                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-info">
                                            TELÉFONO:                                                        
                                            </span>
                                            <p class="text-info" id="telfdet"></p>
                                            
                                          </div>   

                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-info">
                                            DIRECCIÓN:                                                        
                                            </span>
                                            <p class="text-info" id="dirdet"></p>

                                          </div>                                               
                                            
                                        </div>
                                    </div>                          

                                </div>                                
                                    
                                <!-- PANEL DATOS LABORALES -->                   
                                <div class="panel panel-success">

                                    <div class="panel-heading" role="tab" id="heading1">
                                        <h4 class="panel-title">
                                            <a href="#collapseLabs" data-toggle="collapse" data-parent="#acordion">
                                               <i class="glyphicon glyphicon-file"></i>
                                                Datos Laborales
                                            </a>
                                        </h4>
                                    </div>                                                

                                    <div id="collapseLabs" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            
                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-success">
                                            CARGO:                                                        
                                            </span>
                                            <p class="text-success" id="cardet"></p>
                                              
                                          </div>

                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-success">
                                            SALARIO:                                                        
                                            </span>
                                            <p class="text-success" id="saldet"></p>
                                              
                                          </div>
                                            
                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-success">
                                            HORA ENTRADA:                                                        
                                            </span>
                                            <p class="text-success" id="horaIndet"></p>
                                            
                                            <span class="label label-success">
                                            HORA SALIDA:                                                        
                                            </span>
                                            <p class="text-success" id="horaOutdet"></p>                                            
                                              
                                          </div>                                           
                                            
                                        </div>
                                    </div>                          

                                </div>   
                                
                                <!-- PANEL DATOS DE ACCESO -->                   
                                <div class="panel panel-warning">

                                    <div class="panel-heading" role="tab" id="heading1">
                                        <h4 class="panel-title">
                                            <a href="#collapseAcc" data-toggle="collapse" data-parent="#acordion">
                                               <i class="glyphicon glyphicon-file"></i>
                                                Datos de Acceso
                                            </a>
                                        </h4>
                                    </div>                                                

                                    <div id="collapseAcc" class="panel-collapse collapse">
                                      <div class="panel-body ">
                                            
                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-warning">
                                            USUARIO:                                                        
                                            </span>
                                              <p class="text-warning" id="userdet"></p>
                                              
                                          </div>      
                                            
                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-warning">
                                            CONTRASEÑA:                                                        
                                            </span>
                                            <p class="text-warning" id="passdet"></p>
                                            
                                          </div>   

                                          <div class="col-md-4 container">
                                              
                                            <span class="label label-warning">
                                            ESTADO:                                                        
                                            </span>
                                            <p class="text-warning" id="activodet"></p>

                                          </div>                                               
                                            
                                        </div>
                                    </div>                          

                                </div>                                  
                                    
				</div><!-- FIN MODAL BODY -->
						
				<div class="modal-footer">
                                    <div class="btn-toolbar" role="toolbar">
                                    <div class="btn btn-group" role="group">

					  <button type="button" class="btn btn-success" data-dismiss="modal">
					  	<i class="glyphicon glyphicon-thumbs-up"></i>
					  	OK
					  </button>
                                    </div>
                                    </div>
	 			</div><!-- FIN MODAL FOOTER -->
	 			
			</div>

		</div>
	</div>

</div>
