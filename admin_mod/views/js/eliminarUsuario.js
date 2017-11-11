/* 
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "eliminarUsuario.js"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 19/10/2017 | 06:03:13 AM.
 */

function confirmarEliminar(id_user){
    alertify.confirm(
            '<img src="/Easy_Order_Dev_ARC/admin_mod/views/img/EOlogoXSWFondo3.png">', 
            '<h2>\n\
                <span class="label label-danger">\n\
                  <i class="glyphicon glyphicon-exclamation-sign"></i>\n\
                  ¿Desea eliminar el usuario seleccionado?\n\
                </span>\n\
            </h2>', 
            function(){ eliminarUsuario(id_user) },
            function(){ alertify.warning("<span><h4><i class='glyphicon glyphicon-exclamation-sign'></i> No se eliminó el usuario </h4></span>")}
    );
}

function eliminarUsuario(id_user){	
	parametros = { "doc" : id_user };
        
        $.ajax({
            data: parametros,
            url: '../../Eliminarusuario/Eliminaruser',
            type: 'post',
            
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                console.log(response);
                if(response == 1){
                    //Se actualiza la tabla despues del response.
                    $("#tabla-users").load(location.href + " #tabla-users");
                    //Se notifica al usuario la actualización correcta
                    alertify.error("<span><h4><i class='glyphicon glyphicon-ban-circle'></i> El usuario ha sido eliminado! </h4></span>");
                }else{
                    //Se notifica al usuario el error
                    alertify.error("<span><h4><i class='glyphicon glyphicon-remove-sign'></i> Ha ocurrido un ERROR al eliminar el usuario!</h4></span>");
                }
            }
        });
}

