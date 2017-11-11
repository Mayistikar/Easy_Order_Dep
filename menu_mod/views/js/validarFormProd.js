/* 
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "validarFormProd.js"  Version:  1.0.
 * Descripción: Valida el formulario de crear producto.
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 2/10/2017 | 12:07:33 AM.
 */

$(document).ready( inicio() );

function inicio() {
    $("span.help-block").hide();
    
    //Validando CODIGO
    //Validador(item, tipo, min, max, nomItem)
    $("#codProd").keyup(function vars(){
        //Validando codigo solo NUMEROS no vacio
        var codProd = new Validador("codProd", 6, 1);
        return codProd.valCampoTexto();
    });   
    
    //Validando CODIGO FOCUS
    //Validador(item, tipo, min, max, nomItem)
    $("#codProd").focusout(function vars(){
        //Validando codigo solo NUMEROS no vacio
        var codProd = new Validador("codProd", 6, 1);
        return codProd.valCampoTexto();
    });   
    
    //Validando NOMBRE PRODUCTO
    //Validador(item, tipo, min, max, nomItem)
    $("#nomProd").keyup(function vars(){
        //Validando segundo nombre solo letras
        var nomProd = new Validador("nomProd", 10, 3, 40);
        return nomProd.valCampoTexto();
    }); 

    //Validando PRECIO PRODUCTO
    //Validador(item, tipo, min, max, nomItem)
    $("#precProd").keyup(function vars(){
        //Validando PRECIO solo numeros
        var precProd = new Validador("precProd", 6, 1);
        return precProd.valCampoTexto();
    });
    
    //Validando IVA
    //Validador(item, tipo, min, max, nomItem)
    $("#ivaProd").keyup(function vars(){
        //Validando IVA solo NUMEROS no vacio max 2 caracteres
        var ivaProd = new Validador("ivaProd", 12, 1, 3);
        return ivaProd.valCampoTexto();
    });      

    //Validando MARCA PRODUTO
    //Validador(item, tipo, min, max, nomItem)
    $("#marcProd").keyup(function vars(){
        //Validando segundo PRODUCTO solo letras
        var marcProd = new Validador("marcProd", 1, 3);
        return marcProd.valCampoTexto();
    });   
    
    //Validando FECHA VENCIMIENTO
    //Validador(item, tipo, min, max, nomItem)
    $("#fechaProd").change(function vars(){
        //Validando fecha de VENCIMIENTO, formato DD-MM-AAAA
        var fechaProd = new Validador("fechaProd", 16);
        return fechaProd.valCampoTexto();
    });  
    
    //Validando TIEMPO PREPARACIÓN
     //Validador(item, tipo, min, max, nomItem)
    $("#tPrep").focusout(function vars(){
        //Validando TIEMPO PREP  
        var tPrep = new Validador("tPrep", 15);
        return tPrep.valCampoTexto();
    });
    
    //Validando TIEMPO PREPARACIÓN
     //Validador(item, tipo, min, max, nomItem)
    $("#tPrep").change(function vars(){
        //Validando TIEMPO PREP  
        var tPrep = new Validador("tPrep", 15);
        return tPrep.valCampoTexto();
    });      

    //Validando INGREDIENTES
    //Validador(item, tipo, min, max, nomItem)
    $("#ingredProd").keyup(function vars(){
        //Validando INGREDIENTES solo letras, con tamaño limitado
        var ingredProd = new Validador("ingredProd", 4, 0, 200);
        return ingredProd.valCampoTexto();
    });
    
    //Validando CANTIDAD
    //Validador(item, tipo, min, max, nomItem)
    $("#cantProd").keyup(function vars(){
        //Validando CANTIDAD solo NUMEROS no vacio
        var cantProd = new Validador("cantProd", 12, 1, 10);
        return cantProd.valCampoTexto();
    }); 

    //Validando TIPO PROD
    //Validador(item, tipo, min, max, nomItem)
    $("#btnTiProd").focusout(function vars(){
        //Validando TIPO PROD
        //console.log("hora: "+$("#label-tipo-doc").text());
        var btnTiProd = new Validador("btnTiProd", 17);
        return btnTiProd.valCampoTexto();
    });
    
    //Validando DESCRIPCIÓN
    //Validador(item, tipo, min, max, nomItem)
    $("#descProd").keyup(function vars(){
        //Validando DESCRIPCION solo letras, con tamaño limitado
        var descProd = new Validador("descProd", 4, 0, 300);
        return descProd.valCampoTexto();
    });     

}

