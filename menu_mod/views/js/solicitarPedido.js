/* 
 * PROYECTO EASY ORDER
 * 
 * Módulo: Administrador
 * Documento: "solicitarPedido.js"  Version:  1.0.
 * Descripción: 
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 18/10/2017 | 11:27:21 PM.
 */

function solicitarPedido(id){
	
	activo = ($('#activo').prop('checked'))?1:0;
	
	parametros = {			
            "numero_mesa" : $('#mesa'+id).val(),
            "etapa" : 'SOLICITADO',
            "id_prod" : $('#idProd'+id).val(),
            "cantidad" : $('#cant000'+id).val()
	};
        
        $.ajax({
            data: parametros,
            url: '../../Pedido/Guardarpedido',
            type: 'post',
            
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve                
                //console.log(response);
                if(response == 1 || response == 11){
                    //Se actualiza la tabla despues del response.
                    $("#tabla-users").load(location.href + " #tabla-users");
                    //Se notifica al usuario la actualización correcta
                    alertify.success("<span><h4><i class='glyphicon glyphicon-thumbs-up'></i> Pedido Realizado Exitosamente!</h4></span>");
                }else{
                    //Se notifica al usuario el error
                    alertify.error("<span><h4><i class='glyphicon glyphicon-thumbs-down'></i> Ha ocurrido un ERROR!</h4></span>");
                }
            }
        });
}