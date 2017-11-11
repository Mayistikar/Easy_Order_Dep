<!DOCTYPE html>
<!--
PROYECTO EASY ORDER

Módulo:
Documento: "listarUsersAdm.php"  Version:  1.0.
Descripción:
Autor: andersonrodriguezce@gmail.com.
Fecha creación: 13/10/2017 | 03:18:13 AM.
-->

<article>

	<center>
		<h1><span class="label label-success">USUARIOS REGISTRADOS</span></h1>
		<br>
	</center>
	<div class="container" id="tabla-users">
		<div class="row">
			<div class="col-sm-9">
				<div class="table-responsive">

					<table class="table table-hover table-condensed table-bordered">
						<tr>
							<td><b>Ver</b></td>
							<td><b>Nombres</b></td>
							<td><b>Apellidos</b></td>
							<td><b>Documento</b></td>
							<td><b>Celular</b></td>
							<td><b>Dirección</b></td>
							<td><b>Editar</b></td>
							<td><b>Eliminar</b></td>
						</tr>
						<?php foreach ($users as $row){
						//Se crea una cadena con todos los datos para usarlos en la funcion JS para el Update.
						$cadenaDatos =  $row["cod_usuario"]				."||".
										$row["primer_nombre_usuario"]	."||".
										$row["segundo_nombre_usuario"]	."||".
										$row["primer_apellido_usuario"]	."||".
										$row["segundo_apellido_usuario"]."||".
										$row["fecha_nacimiento_usuario"]."||".
										$row["celular_usuario"]			."||".
										$row["direccion_usuario"]		."||".
										$row["telefono_fijo_usuario"]	."||".
										$row["salario_usuario"]			."||".
										$row["hora_entrada_usuario"]	."||".
										$row["hora_salida_usuario"]		."||".
										$row["user_usuario"]			."||".
										$row["pass_usuario"]			."||".
										$row["activo_usuario"]			."||".
										$row["genero"]				."||".
										$row["cargo"]				."||".
										$row["tipo_documento"];						
						?>
						
						
						<tr>
							<td>
							<button type="button" id="btn-edit" class="btn btn-primary glyphicon glyphicon-zoom-in" data-toggle="modal" data-target="#modalDetaUser" onclick="agregarDetalleUser('<?= $cadenaDatos ?>')">
					  			<span id="label-edit" name="edit"></span>
							</button>
							</td>						
							<td>
								<?= $row["primer_nombre_usuario"]." ".$row["segundo_nombre_usuario"]?>
							</td>
							<td>
								<?= $row["primer_apellido_usuario"]." ".$row["segundo_apellido_usuario"]?>
							</td>
							<td>
								<?= $row["cod_usuario"] ?>
							</td>
							<td>
								<?= $row["celular_usuario"] ?>
							</td>
							<td>
								<?= $row["direccion_usuario"] ?>
							</td>
							<td>
								<button type="button" id="btn-edit" class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEditUser" onclick="agregarDatosUser('<?= $cadenaDatos ?>')">
					  <span id="label-edit" name="edit"></span>
					</button>
							</td>
							<td>
								<button type="button" id="btn-del" class="btn btn-danger glyphicon glyphicon-trash" onclick="confirmarEliminar('<?= $row["cod_usuario"] ?>')">
					  <span id="label-del" name="del"></span>
					</button>
							</td>
						</tr>
						<?php }?>
					</table>
				</div>
			</div>
		</div>
	</div>


</article>

<!-- AGREGANDO FUNCIONES MODAL -->
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/actualizarUsuario.js"></script>
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/eliminarUsuario.js"></script>
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/detalleUsuario.js"></script>
<!-- AGREGANDO FUNCIONES MODAL -->