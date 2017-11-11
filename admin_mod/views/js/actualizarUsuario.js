/* 
 * PROYECTO EASY ORDER
 * 
 * Módulo: Administrador
 * Documento: "actualizarUsuario.js"  Version:  1.0.
 * Descripción: 
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 18/10/2017 | 11:27:21 PM.
 */

function agregarDatosUser(cadenaDatos){
	
	datos = cadenaDatos.split('||');
	
	$('#doc').val(datos[0]);
	$('#nom1').val(datos[1]);
	$('#nom2').val(datos[2]);
	$('#ape1').val(datos[3]);
	$('#ape2').val(datos[4]);	
	$('#fecha').val(datos[5]);
	$('#cel').val(datos[6]);	
	$('#dir').val(datos[7]);
	$('#telf').val(datos[8]);
	$('#sal').val(datos[9]);
	$('#horaIn').val(datos[10]);
	$('#horaOut').val(datos[11]);
	$('#user').val(datos[12]);
	$('#pass').val(datos[13]);
	
	//Se cambia el estado del checkbox según la BD
	if(parseInt(datos[14]) === 0){    
		$('#activo').prop('checked', false).change();
	}else{
		$('#activo').prop('checked', true).change();
	}
	
	$('#label-btnGen').text(datos[15]);
	$('#label-btnCar').text(datos[16]);
	$('#label-btnDoc').text(datos[17]);
}

function actualizaDatosUser(){
	
	activo = ($('#activo').prop('checked'))?1:0;
	
	parametros = {			
            "doc" : $('#doc').val(),
            "nom1" : $('#nom1').val(),
            "nom2" : $('#nom2').val(),
            "ape1" : $('#ape1').val(),
            "ape2" : $('#ape2').val(),	
            "fecha" : $('#fecha').val(),
            "cel" : $('#cel').val(),
            "dir" : $('#dir').val(),
            "telf" : $('#telf').val(),
            "sal" : $('#sal').val(),
            "horaIn" : $('#horaIn').val(),
            "horaOut" : $('#horaOut').val(),
            "user" : $('#user').val(),
            "pass" : $('#pass').val(),		
            "activo" : activo,	
            "genero" : $('#label-btnGen').text(),
            "cargo"  : $('#label-btnCar').text(),
            "tipo-doc" : $('#label-btnDoc').text()
	};
        
        $.ajax({
            data: parametros,
            url: '../../Actualizarusuario/Actualizaruser',
            type: 'post',
            
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve                
                console.log(response);
                if(response == 1){
                    //Se actualiza la tabla despues del response.
                    $("#tabla-users").load(location.href + " #tabla-users");
                    //Se notifica al usuario la actualización correcta
                    alertify.success("<span><h4><i class='glyphicon glyphicon-thumbs-up'></i> Usuario Actualizado Exitosamente!</h4></span>");
                }else{
                    //Se notifica al usuario el error
                    alertify.error("<span><h4><i class='glyphicon glyphicon-thumbs-down'></i> Ha ocurrido un ERROR!</h4></span>");
                }
            }
        });
}