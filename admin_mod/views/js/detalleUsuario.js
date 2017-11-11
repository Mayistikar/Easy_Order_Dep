/* 
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "detalleUsuario.js"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 19/10/2017 | 08:44:54 AM.
 */
function agregarDetalleUser(cadenaDatos){
	
	datos = cadenaDatos.split('||');
	
	$('#docdet').text(datos[0]);
	$('#nomdet1').text(datos[1]);
	$('#nomdet2').text(datos[2]);
	$('#apedet1').text(datos[3]);
	$('#apedet2').text(datos[4]);	
	$('#fechadet').text(datos[5]);
	$('#celdet').text(datos[6]);	
	$('#dirdet').text(datos[7]);
	$('#telfdet').text(datos[8]);
	$('#saldet').text(datos[9]);
	$('#horaIndet').text(datos[10]);
	$('#horaOutdet').text(datos[11]);
	$('#userdet').text(datos[12]);
	$('#passdet').text(datos[13]);
	
	//Se cambia el estado del checkbox según la BD
	if(parseInt(datos[14]) === 0){    
		$('#activodet').text('INACTIVO');
	}else{
		$('#activodet').text('ACTIVO');
	}
	
	$('#gendet').text(datos[15]);
	$('#cardet').text(datos[16]);
	$('#TipDocdet').text(datos[17]);
}

