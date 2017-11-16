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
            url: '../../menu_mod/Pedido/Guardarpedido',
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

function guardarPedido(id){
    console.log("ingreso");
    var productos = {};
    var totalPedido = 0;
    
    if(localStorage.getItem("productos") !== null){
        productos = JSON.parse(localStorage.getItem("productos"));
    }
    
    if(localStorage.getItem("totalPedido")!== null){
        totalPedido = parseInt(localStorage.getItem("totalPedido"));
    }
    
    //Creando el objeto producto-pedido
    var nombre_prod = $('#prod00'+id).val();
    var cantidad_prod = parseInt($('#cant000'+id).val());
    var precio_prod =  parseInt($('#prec00'+id).val());
    var total_prod = cantidad_prod*precio_prod;
    
    var producto = { 
        id:$('#idProd'+id).val(),
        nombre:nombre_prod,
        mesa:$('#mesa'+id).val(),
        cantidad:cantidad_prod,
        precio:precio_prod,
        total_prod:total_prod
    }
    
    totalPedido+=total_prod;    
    productos.push(producto);
    
    localStorage.setItem("productos", JSON.stringify(productos));
    localStorage.setItem("totalPedido", totalPedido);
    
    mostrarPedido(nombre_prod, cantidad_prod, total_prod);
}

function mostrarPedido(nombre_prod, cant_prod, total_prod){      

    var capa = document.getElementById("capa"); //Crea el lugar donde se creará las etiquetas
    capa.setAttribute("class", "container");
    var div = document.createElement("div"); //genera la etiqueta
    var btn1 = document.createElement("button");
    div.setAttribute("class","alert alert-info container col-md-12"); //le agrego un atributo de tipo class, con su respectivo valor.    
                 
    //
    btn1.setAttribute("class", "close pull-right");  
    btn1.setAttribute("onClick", "solicitarPedido()");
    btn1.setAttribute("data-dismiss", "alert");
    btn1.innerHTML = '<span class="glyphicon glyphicon-remove-sign"></span>';        
    div.innerHTML = '<strong>'+nombre_prod+'</strong> <br>Cantidad: '+cant_prod+', Precio: $'+total_prod+' '; //creo los valores de la etiqueta                
    div.appendChild(btn1);
    capa.appendChild(div); //agrego la etiqueta  
    
}