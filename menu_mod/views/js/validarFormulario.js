/* 
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "validarFormulario.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 2/10/2017 | 12:07:33 AM.
 */

$(document).ready( inicio() );

function inicio() {
    $("span.help-block").hide();
    
    //Validando PRIMER NOMBRE
    //Validador(item, tipo, min, max, nomItem)
    $("#nom1").keyup(function vars(){
        //Validando primer nombre solo letras no vacio
        var valNombre = new Validador("nom1", 11, 3);
        return valNombre.valCampoTexto();
    });    
    
    //Validando SEGUNDO NOMBRE
    //Validador(item, tipo, min, max, nomItem)
    $("#nom2").keyup(function vars(){
        //Validando segundo nombre solo letras
        var valNombre2 = new Validador("nom2", 1, 3);
        return valNombre2.valCampoTexto();
    }); 

    //Validando PRIMER APELLIDO
    //Validador(item, tipo, min, max, nomItem)
    $("#ape1").keyup(function vars(){
        //Validando primer apellido solo letras no vacio
        var valApellido = new Validador("ape1", 11, 3);
        return valApellido.valCampoTexto();
    });        
    
    //Validando SEGUNDO APELLIDO
    //Validador(item, tipo, min, max, nomItem)
    $("#ape2").keyup(function vars(){
        //Validando segundo apellido solo letras
        var valApellido2 = new Validador("ape2", 1, 3);
        return valApellido2.valCampoTexto();
    });
    
    //Validando DOCUMENTO
    //Validador(item, tipo, min, max, nomItem)
    $("#doc").keyup(function vars(){
        //Validando documento solo numeros y obligatorio
        var valDocumento = new Validador("doc", 14, 5, 20, "Documento");
        return valDocumento.valCampoTexto();
    });    
    
    //Validando TIPO DOCUMENTO
    //Validador(item, tipo, min, max, nomItem)
    $("#doc").focusout(function vars(){
        //Validando hora entrada        
        //console.log("hora: "+$("#label-tipo-doc").text());
        var valTipoDoc = new Validador("btnDoc", 17);
        return valTipoDoc.valCampoTexto();
    });
    
    //Validando TIPO DOCUMENTO
    //Validador(item, tipo, min, max, nomItem)
    $("#id-doc li a").click(function vars(){
        //Validando hora entrada        
        //console.log("hora: "+$("#label-tipo-doc").text());
        var valTipoDoc = new Validador("btnDoc", 17);
        return valTipoDoc.valCampoTexto();
    });    
    
    //Validando FECHA
    //Validador(item, tipo, min, max, nomItem)
    $("#fecha").focusout(function vars(){
        //Validando fecha de nacimiento, formato DD-MM-AAAA
        var valFechaN = new Validador("fecha", 16);
        return valFechaN.valCampoTexto();
    });    
    
    //Validando FECHA
    //Validador(item, tipo, min, max, nomItem)
    $("#fecha").change(function vars(){
        //Validando fecha de nacimiento, formato DD-MM-AAAA
        var valFechaN = new Validador("fecha", 16);
        return valFechaN.valCampoTexto();
    });         
    
    //Validando CELULAR
    //Validador(item, tipo, min, max, nomItem)
    $("#cel").keyup(function vars(){
        //Validando celular solo numeros no vacio
        var valCel = new Validador("cel", 6);
        return valCel.valCampoTexto();
    });
    
    //Validando DIRECCION
    //Validador(item, tipo, min, max, nomItem)
    $("#dir").keyup(function vars(){
        //Validando direccion solo letras no vacio, con tamaño limitado
        var valDir = new Validador("dir", 4, 0, 50);
        return valDir.valCampoTexto();
    });
    
    //Validando SALARIO
    //Validador(item, tipo, min, max, nomItem)
    $("#sal").keyup(function vars(){
        //Validando salario solo numeros
        var valSalario = new Validador("sal", 6);
        return valSalario.valCampoTexto();
    });

    //Validando HORA ENTRADA
     //Validador(item, tipo, min, max, nomItem)
    $("#horaIn").change(function vars(){
        //Validando hora entrada        
        var valHoraIn = new Validador("horaIn", 15);
        return valHoraIn.valCampoTexto();
    });
    
    //Validando HORA SALIDA
    //Validador(item, tipo, min, max, nomItem)
    $("#horaOut").change(function vars(){
        //Validando hora salida
        var valHoraOut = new Validador("horaOut", 15);
        return valHoraOut.valCampoTexto();
    }); 
    
    //Validando USUARIO
    //Validador(item, tipo, min, max, nomItem)
    $("#user").focusout(function vars(){
        //Validando usuario obligatorio
        var valUsuario = new Validador("user", 99);
        return valUsuario.valCampoTexto();
    });
    
    //Validando USUARIO cuando KEYUP
    //Validador(item, tipo, min, max, nomItem)
    $("#user").keyup(function vars(){
        //Validando usuario obligatorio
        var valUsuario = new Validador("user", 99);
        return valUsuario.valCampoTexto();
    });
    
    //Validando CONTRASEÑA
    //Validador(item, tipo, min, max, nomItem)
    $("#pass").focusout(function vars(){
        //Validando usuario obligatorio
        var valUsuario = new Validador("pass", 99);
        return valUsuario.valCampoTexto();
    });
    
    //Validando USUARIO cuando KEYUP
    //Validador(item, tipo, min, max, nomItem)
    $("#pass").keyup(function vars(){
        //Validando usuario obligatorio
        var valUsuario = new Validador("pass", 99);
        return valUsuario.valCampoTexto();
    });
}

