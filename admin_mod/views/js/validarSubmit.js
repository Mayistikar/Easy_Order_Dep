/* 
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "validarSubmit.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 6/10/2017 | 01:12:15 AM.
 */


function onSubmit() {

        //Validando primer nombre solo letras no vacio
        var valNombre = new Validador("nom1", 11, 3);

        //Validando segundo nombre solo letras
        var valNombre2 = new Validador("nom2", 1, 3);

        //Validando primer apellido solo letras no vacio
        var valApellido = new Validador("ape1", 11, 3);

        //Validando segundo apellido solo letras
        var valApellido2 = new Validador("ape2", 1, 3);

        //Validando documento solo numeros y obligatorio
        var valDocumento = new Validador("doc", 14, 5, 20, "Documento");
 
        //Validando fecha de nacimiento, formato DD/MM/AAAA
        var valFechaN = new Validador("fecha", 16);
        
        //Validando TIPO DOCUMENTO
        var valTipoDoc = new Validador("btnDoc", 17);
        
        //Validando GENERO
        var valGenero = new Validador("btnGen", 17);
        
        //Validando CARGO
        var valCargo = new Validador("btnCar", 17);
    
        //Validando celular solo numeros no vacio
        var valCel = new Validador("cel", 6);
    
        //Validando direccion solo letras no vacio, con tamaño limitado
        var valDir = new Validador("dir", 4, 0, 50);

        //Validando salario solo numeros
        var valSalario = new Validador("sal", 6);
    
        //Validando hora entrada
        var valHoraIn = new Validador("horaIn", 15);
    
        //Validando hora salida
        var valHoraOut = new Validador("horaOut", 15);
        
        //Validando USER
        var valUser = new Validador("user", 99);   

        //Validando PASS
        var valPass = new Validador("pass", 99);
    
    if( 
        valNombre.valCampoTexto()   &&
        valNombre2.valCampoTexto()  &&  
        valApellido.valCampoTexto() &&
        valApellido2.valCampoTexto()&&
        valDocumento.valCampoTexto()&&
        valFechaN.valCampoTexto()   &&
        valTipoDoc.valCampoTexto()  &&
        valGenero.valCampoTexto()   &&
        valCargo.valCampoTexto()    &&
        valCel.valCampoTexto()      &&
        valDir.valCampoTexto()      &&
        valSalario.valCampoTexto()  &&                                          
        valHoraIn.valCampoTexto()   &&                                      
        valHoraOut.valCampoTexto()  &&
        valUser.valCampoTexto()     &&
        valPass.valCampoTexto()                
    ){
        return true;
    }else{
        return false;
    }   
}

