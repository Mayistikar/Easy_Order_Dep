/* 
 * PROYECTO EASY ORDER
 * 
 * Módulo: Administrador
 * Documento: "solicitarPedido.js"  Version:  1.0.
 * Descripción: 
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 18/10/2017 | 11:27:21 PM.
 */

function mostrarDatos(prod){      
    if(sessionStorage.key(0)!=null){
        document.getElementById("ordenar").removeAttribute("class");
        document.getElementById("ordenar").setAttribute("class", "btn btn-success"); 
        document.getElementById("compra").removeAttribute("class");
        document.getElementById("compra").setAttribute("class", "label label-info");   
    }    
    var capa = document.getElementById("capa"); //Crea el lugar donde se creará las etiquetas
    capa.setAttribute("class", "container");
    var div = document.createElement("div"); //genera la etiqueta
    var btn1 = document.createElement("button");
    div.setAttribute("class","alert alert-info container col-md-12"); //le agrego un atributo de tipo class, con su respectivo valor.    
                 
    for(var i=0;i<sessionStorage.length;i++){ //para cada valor del store
        var item = sessionStorage.key(i);
        var orden = JSON.parse(sessionStorage.getItem(item)); // Traigo el objeto serializado y lo reconstruyo 
        btn1.setAttribute("class", "close pull-right");  
        btn1.setAttribute("onClick", "borrarItem(\""+orden.prod+"\")");
        btn1.setAttribute("data-dismiss", "alert");
        btn1.innerHTML = '<span class="glyphicon glyphicon-remove-sign"></span>';        
        div.innerHTML = '<strong>'+orden.prod+'</strong> <br>Cantidad: '+orden.cant+' <br> Precio: $'+orden.prec+' '; //creo los valores de la etiqueta                
        div.appendChild(btn1);
        capa.appendChild(div); //agrego la etiqueta  
    }
}

