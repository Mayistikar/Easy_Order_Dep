<!DOCTYPE html>
<!--
PROYECTO EASY ORDER

Módulo:
Documento: "ordenesViewChe.php"  Version:  1.0.
Descripción:
Autor: andersonrodriguezce@gmail.com.
Fecha creación: 13/10/2017 | 03:18:13 AM.
-->

<article>

	<center>
		<h1><span class="label label-success">ORDENES REGISTRADAS</span></h1>
		<br>
	</center>
	<div class="container" id="tabla-users">
		<div class="row">
			<div class="col-sm-12">
				<div class="table-responsive" id="tabla-ordenes">

					<table class="table table-hover table-condensed table-bordered">
						<tr>
							<td><b>ORDEN</b></td>
							<td><b>PRODUCTO</b></td>
							<td><b>CANT</b></td>
							<td><b>MESA</b></td>
							<td><b>OBSERVACIONES</b></td>
							<td><b>HORA SOLICITADO</b></td>
							<td><b>TIEMPO ESTIMADO</b></td>
							<td><b>TIEMPO TRANSCURRIDO</b></td>                                                        
							<td><b>ESTADO</b></td>
                                                        <td><b>EN PREPARACIÓN</b></td>
                                                        <td><b>PREPARADO</b></td>
                                                        <td><b>RECHAZADO</b></td>
						</tr>
						<?php foreach ($ordenes as $row){                                                
						//Se crea una cadena con todos los datos para usarlos en la funcion JS para el Update.
						$cadenaDatos =  $row["orden"]				."||".
										$row["producto"]	."||".
										$row["cantidad"]	."||".
										$row["mesa"]    	."||".
										$row["observaciones"]   ."||".
										$row["solicitado"]      ."||".
										$row["estimado"]	."||".
										$row["estado"]
                                                ?>
						<tr>						
							<td>							
								<div id="orden<?=$cantidad?>"><?= $row["orden"] ?></div>
							</td>
							
							<td>
								<div id="prod<?=$cantidad?>"><?= $row["producto"] ?></div>
							</td>
							
							<td>
								<div id="cant<?=$cantidad?>"><?= $row["cantidad"] ?></div>
							</td>
							
							<td>
								<div id="mesa<?=$cantidad?>"><?= $row["mesa"] ?></div>
							</td>
							
							<td>
								<div id="obs<?=$cantidad?>"><?= $row["observaciones"] ?></div>
							</td>
                           
                            <td>
								<div id="solic<?=$cantidad?>"><?= $row["solicitado"] ?></div>
							</td>
							
							<td>
								<div id="estim<?=$cantidad?>"><?= $row["estimado"] ?></div>
							</td>
                           		
                            <td id="time<?=$cantidad?>">
							</td>
							
							<td>
								<div id="estado<?=$cantidad?>"><?= $row["estado"] ?></div>
							</td>
							
							<td>
								<button type="button" id="btn-enPrep<?=$cantidad?>" class="btn btn-warning glyphicon glyphicon-time" onclick="actualizaOrden('EN PREPARACION', <?=$cantidad?>)">
					  <span id="label-edit" name="edit"></span>
					</button>
							</td>
							<td>
								<button type="button" id="btn-prep" class="btn btn-success glyphicon glyphicon-ok-circle" data-toggle="modal" data-target="#modalEditUser" onclick="actualizaOrden('PREPARADO', <?=$cantidad?>)">
					  <span id="label-edit" name="edit"></span>
					</button>
							</td>
							<td>
								<button type="button" id="btn-del" class="btn btn-danger glyphicon glyphicon-remove-circle" onclick="actualizaOrden('RECHAZADO', <?=$cantidad?>)">
					  <span id="label-cant" name="del" class="hidden"><?=++$cantidad ?></span>
					</button>
							</td>
						</tr>
						<?php }?>
					</table>
					
										
					<script>
						
						String.prototype.toHHMMSS = function () {
							var sec_num = parseInt(this, 10); // don't forget the second param
							var hours   = Math.floor(sec_num / 3600);
							var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
							var seconds = sec_num - (hours * 3600) - (minutes * 60);

							if (hours   < 10) {hours   = "0"+hours;}
							if (minutes < 10) {minutes = "0"+minutes;}
							if (seconds < 10) {seconds = "0"+seconds;}
							return hours+':'+minutes+':'+seconds;
						}
						
						function timeToSeconds(time) {
							time = time.split(/:/);
							return time[0] * 3600 + time[1] * 60 + time[2];
						}
						
						function loadTabla(){
							$("#tabla-ordenes").load(location.href + " #tabla-ordenes");
						}
						
						
						function loadTime(){ 
							var cant = document.getElementsByTagName("tr").length;
							console.log(cant);
							var now = new Date();    
							var hour = now.getHours();
							var minute = now.getMinutes();
							var second = now.getSeconds();

							hour = ( hour < 10 )? "0"+hour : hour;
							minute = ( minute < 10 )? "0"+minute : minute;
							second = ( second < 10 )? "0"+second : second;


							var datetime = hour +':'+ minute +':'+ second;
							console.log(datetime);
							for(var i=0; i<cant; i++){
								
								var transcurrido = timeToSeconds(datetime) - timeToSeconds( $("#solic"+i).text() );
								$("#time"+i).text(transcurrido.toString().toHHMMSS());
							}							
						  }
						
						$(document).ready(function(){
							setInterval(loadTime,1000);
							setInterval(loadTabla, 3000);
						});					
					</script>					

				</div>
			</div>
		</div>
	</div>


</article>

<!-- AGREGANDO FUNCIONES MODAL -->
<script src="/Easy_Order_Dev_ARC/chef_mod/views/js/actualizarOrden.js"></script>
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/eliminarUsuario.js"></script>
<script src="/Easy_Order_Dev_ARC/admin_mod/views/js/detalleUsuario.js"></script>
<!-- AGREGANDO FUNCIONES MODAL -->