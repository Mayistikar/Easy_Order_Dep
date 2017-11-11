<!DOCTYPE html>
<!--
PROYECTO EASY ORDER

Módulo:
Documento: "editarUserViewAdm.php"  Version:  1.0.
Descripción:
Autor: andersonrodriguezce@gmail.com.
Fecha creación: 18/10/2017 | 03:29:44 AM.
-->
<!-- AGREGANDO ESTILOS DATETIMEPICKER -->
<link rel="stylesheet" href="/Easy_Order_Dev_ARC/admin_mod/views/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="/Easy_Order_Dev_ARC/admin_mod/views/css/bootstrap-clockpicker.min.css">
<!-- AGREGANDO ESTILOS DATETIMEPICKER -->

<!-- AGREGANDO ESTILOS CHECKBOX -->
<link rel="stylesheet" href="/Easy_Order_Dev_ARC/admin_mod/views/css/bootstrap-toggle.min.css">    
<!-- AGREGANDO ESTILOS CHECKBOX -->

<div class="container">

	<!-- Modal -->
	<div class="modal fade" id="modalEditUser" role="dialog">
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

					<center>
					<h1>
						<span class="label label-warning">
					  		<i class="glyphicon glyphicon-pencil"></i>
					  		Editando datos del usuario!
					  	</span>
					</h1>
					</center>	

					<br>
					<div class="container col-md-12 col-bg-offset-1">
						<span style="display:none;" id="modal-success"><?=$id?></span>
						<!-- COLUMNA1 -->
						<div class="col-md-6 form-group">

							<div class="form-group">
								<div class="input-group">
									<span class="control-label  input-group-addon list-group-item-success" id="label-nom1">Primer Nombre</span>
									<input class="form-control" type="text" name="nom1" id="nom1">
								</div>
								<b><span class="help-block" id="msj-nom1"></span></b>
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="control-label  input-group-addon list-group-item-success" id="label-nom2">Segundo Nombre</span>
									<input class="form-control" type="text" name="nom2" id="nom2">
								</div>
								<b><span class="help-block" id="msj-nom2"></span></b>
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="control-label  input-group-addon list-group-item-success" id="label-ape1">Primer Apellido</span>
									<input class="form-control" type="text" name="ape1" id="ape1">
								</div>
								<b><span class="help-block" id="msj-ape1"></span></b>
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="control-label  input-group-addon list-group-item-success" id="label-ape2">Segundo Apellido</span>
									<input class="form-control" type="text" name="ape2" id="ape2">
								</div>
								<b><span class="help-block" id="msj-ape2"></span></b>
							</div>

							<div class="form-group">
								<div class="input-group ">
									<input type="text" class="form-control" placeholder="Documento" name="doc" id="doc" disabled>

									<span class="input-group-btn">
							<!-- Split button -->
								<button type="button" id="btn-documento" class="btn btn-danger">
									<span id="label-btnDoc">Tipo Doc.</span>
									<input type="hidden" id="label-tipo-doc" name="tipo-doc"></input>
									</button>
									<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btnDoc">								
								   &nbsp;
									<span class="caret"></span>
									<span class="sr-only">Toggle Dropdown</span>
								</button>

									<ul class="dropdown-menu btn-prep" aria-labelledby="dropdownMenu1" id="id-doc">
										<?php foreach ($documentos as $value){ ?>
										<li>
											<a href="#" class="select">
												<?= $value ?>
											</a>
										</li>
										<?php }?>
									</ul>
									<!-- Split button -->
									</span>
								</div>
								<b><span class="help-block" id="msj-doc"></span></b>
								<!-- EN CASO DE SELECTLIST AL LADO DE INPUT -->
								<b><span class="help-block" id="msj-btnDoc"></span></b>
								<!-- EN CASO DE SELECTLIST AL LADO DE INPUT -->
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon list-group-item-success" id="label-fecha">Fecha de Nacimiento</span>
									<div class="input-group date fj-date">
										<input type="text" class="form-control" name="fecha" id="fecha">
										<span class="input-group-addon" id="iconDate">
									<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>
								<b><span class="help-block" id="msj-fecha"></span></b>
							</div>

							<div class="form-group">
								<div class="input-group ">
									<!-- INPUT GROUP OBLIGATORIO PARA BOTONES SOLOS O EN LINEA -->
									<!-- Split button -->
									<div class="btn-group" id="btn-genero">
										<button type="button" id="btn-dd" class="btn btn-danger">
                            	<span id="label-btnGen">GENERO.</span>
                            	<input type="hidden" id="genero" name="genero"></input>   
                            </button>
										<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btnGen">
                               &nbsp;
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
										<ul class="dropdown-menu btn-prep" aria-labelledby="dropdownMenu1">
											<?php foreach ($generos as $value){ ?>
											<li>
												<a href="#" class="select">
													<?= $value ?>
												</a>
											</li>
											<?php }?>
										</ul>
										<!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->
										<b><span class="help-block" id="msj-btnGen"></span></b>
										<!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->

									</div>

									<span> </span>
									<!-- Split button -->
									<div class="btn-group" id="btn-cargo">
										<button type="button" id="btn-dd" class="btn btn-danger">
                            	<span id="label-btnCar">CARGO.</span>                            	
                            	<input type="hidden" id="label-car" name="cargo"></input>
                           	</button>
										<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btnCar">
                                &nbsp;
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
										<ul class="dropdown-menu btn-prep" aria-labelledby="dropdownMenu1">
											<?php foreach ($cargos as $value){ ?>
											<li>
												<a href="#" class="select">
													<?= $value ?>
												</a>
											</li>
											<?php }?>
										</ul>
										<!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->
										<b><span class="help-block" id="msj-btnCar"></span></b>
										<!-- MSJ FEEDBACK PARA SELECT LIST ALONE -->
									</div>
								</div>
							</div>

						</div>

						<!-- FIN COLUMNA1 -->

						<!-- COLUMNA2 -->
						<div class="col-md-6 form-group">

							<div class="form-group">
								<div class="input-group">
									<span class="control-label  input-group-addon list-group-item-success" id="label-cel">Celular</span>
									<input class="form-control" type="text" name="cel" id="cel">
								</div>
								<b><span class="help-block" id="msj-cel"></span></b>
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="control-label  input-group-addon list-group-item-success" id="label-telf">Teléfono</span>
									<input class="form-control" type="text" name="telf" id="telf">
								</div>
								<b><span class="help-block" id="msj-telf"></span></b>
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="control-label  input-group-addon list-group-item-success" id="label-dir">Dirección</span>
									<input class="form-control" type="text" name="dir" id="dir">
								</div>
								<b><span class="help-block" id="msj-dir"></span></b>
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="control-label  input-group-addon list-group-item-success" id="label-sal">Salario</span>
									<input class="form-control" type="text" name="sal" id="sal">
								</div>
								<b><span class="help-block" id="msj-sal"></span></b>
							</div>

							<div class="form-group">
								<div class="input-group" data-placement="left" data-align="top" data-autoclose="true">

									<span class="input-group-addon list-group-item-success" id="label-horaIn">Entrada</span>
									<input type="text" class="form-control clockpicker" value="12:00" name="horaIn" id="horaIn">

									<span class="input-group-btn">
                          
                           <!-- Split button -->
                            <button type="button" id="btn-horaIn" class="btn btn-danger">
                            	<span id="label-horaIn" name="horaOut">24 Hrs</span>
									</button>

									<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               &nbsp;
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>

									<ul class="dropdown-menu btn-prep" aria-labelledby="dropdownMenu1" id="id-horaIn">
										<?php foreach ($horarios as $value){ ?>
										<li>
											<a href="#" class="select">
												<?= $value ?>
											</a>
										</li>
										<?php }?>
									</ul>
									<!-- Split button -->
									</span>
								</div>
								<!-- EN CASO DE SELECTLIST AL LADO DE INPUT -->
								<b><span class="help-block" id="msj-horaIn"></span></b>
								<!-- EN CASO DE SELECTLIST AL LADO DE INPUT -->
							</div>

							<div class="form-group">
								<div class="input-group" data-placement="left" data-align="top" data-autoclose="true">

									<span class="input-group-addon list-group-item-success" id="label-horaOut">Salida</span>
									<input type="text" class="form-control clockpicker" value="12:00" name="horaOut" id="horaOut">

									<span class="input-group-btn">                           
                           <!-- Split button -->
                            <button type="button" id="btn-horaOut" class="btn btn-danger">
                            	<span id="label-horaOut" name="cargo">24 Hrs</span>
									</button>

									<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               &nbsp;
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>

									<ul class="dropdown-menu btn-prep" aria-labelledby="dropdownMenu1" id="id-horaOut">
										<?php foreach ($horarios as $value){ ?>
										<li>
											<a href="#" class="select">
												<?= $value ?>
											</a>
										</li>
										<?php }?>
									</ul>
									<!-- Split button -->
									</span>
								</div>
								<!-- EN CASO DE SELECTLIST AL LADO DE INPUT -->
								<b><span class="help-block" id="msj-horaOut"></span></b>
								<!-- EN CASO DE SELECTLIST AL LADO DE INPUT -->
							</div>

						</div>
						<!-- FIN COLUMNA2 -->

						<!-- PANEL USER-PASS-ACTIVO -->
						<div class="container col-md-12">
							<div class="panel pan-color">
								<div class="panel-body">
									<center>
										<div class="form-group">
											<div class="input-group">
												<h3><span class="label label-success acceso">DATOS DE ACCESO</span></h3>
											</div>
										</div>

										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon list-group-item-success" id="label-user">USER:</span>
												<input class="form-control" type="text" name="user" id="user" placeholder="Usuario">
											</div>
											<b><span class="help-block" id="msj-user"></span></b>
										</div>

										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon list-group-item-success" id="label-pass">PASS:</span>
												<input class="form-control" type="password" placeholder="Contraseña" name="pass" id="pass">
											</div>
											<b><span class="help-block" id="msj-pass"></span></b>
										</div>

									  <div class="form-group">
										<input type="checkbox" class="form-control" data-toggle="toggle" data-on="ACTIVO" data-off="INACTIVO" data-onstyle="success" data-offstyle="danger" data-size="mini" data-width="100" name="activo" id="activo"> 
									  </div>

									</center>
								</div>
							</div>
						</div>
						<!-- PANEL USER-PASS-ACTIVO -->
					</div>
					
					</div><!-- FIN MODAL BODY -->
						
					<div class="modal-footer">
						<!-- BOTON SUBMIT -->
						<button type="submit" class="btn btn-warning btn-lg btn-block" onclick="actualizaDatosUser()">
							<i class="glyphicon glyphicon-floppy-saved"></i> 
							ACTUALIZAR
						</button>
						<button type="button" class="btn btn-danger btn-lg btn-block" data-dismiss="modal">
							<i class="glyphicon glyphicon-ban-circle"></i>
							CERRAR
						</button>                
						<br>
	 			    </div>
			</div>

		</div>
	</div>

</div>

<!-- AGREGANDO FUNCIONES DATETIMEPICKER -->      
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/bootstrap-clockpicker.min.js"></script>
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/bootstrap-datepicker.min.js"></script>
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/bootstrap-datepicker.es.min.js"></script>
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/dateTimePicker.js"></script>
<!-- AGREGANDO FUNCIONES DATETIMEPICKER -->

<!-- AGREGANDO SPLIT BUTTON -->
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/splitBtn.js"></script>
<!-- AGREGANDO SPLIT BUTTON -->

<!-- AGREGANDO TOGGLE BUTTON -->
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/bootstrap-toggle.min.js"></script>
<!-- AGREGANDO TOGGLE BUTTON -->

<!-- AGREGANDO FUNCIONES VALIDACION -->
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/validador.js"></script>
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/validarFormulario.js"></script>
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/validarSubmit.js"></script>
<!-- AGREGANDO FUNCIONES VALIDACION -->


<!-- AGREGANDO FUNCIONES GENERALES -->
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/default.js"></script>
<!-- AGREGANDO FUNCIONES GENERALES -->