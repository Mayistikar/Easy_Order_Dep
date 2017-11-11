/* 
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "validarFormulario.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 2/10/2017 | 12:07:33 AM.
 */

/**
 * @class El uso de la función responde al tipo de validación asi:
 * 
 * @description [0] = Valida campos obligatorios.
 * @description [1] = Valida campos que solo deben tener letras.
 * @description [2] = Valida campos que solo deben tener números.
 * @description [3] = Valida campos que deben tener un tamaño mínimo.
 * @description [4] = Valida campos que deben tener un tamaño máximo.
 * @description [5] = Valida campos obligatorios y deben tener solo letras.
 * @description [6] = Valida campos obligatorios y deben tener solo números.
 * @description [7] = Valida campos obligatorios y no deben tener caracteres especiales.
 * @description [8] = Valida campos obligatorios y deben tener un tamaño mínimo.
 * @description [9] = Valida campos obligatorios y deben tener un tamaño máximo.
 * @description [10] = Valida campos obligatorios, deben tener un tamaño mínimo y máximo.
 * @description [11] = Valida campos obligatorios, deben tener un tamaño mínimo y máximo y tener solo letras.
 * @description [12] = Valida campos obligatorios, deben tener un tamaño mínimo y máximo y tener solo números.
 * @description [13] = Valida campos obligatorios, deben tener un tamaño mínimo y máximo y no tener caracteres especiales.
 * @description [14] = Valida documentos de identidad.
 * @description [15] = Valida campos no obligatorios con horarios en formato HH:MM;
 * @description [16] = Valida campos con fechas en formato DD-MM-AAAA.
 * @description [17] = Valida listas seleccionables.
 * 
 * 
 * @param {string} campoId | El id del campo a validar
 * @param {Number} validacion | No obligatorio | El tipo de validación que requiera hacerse
 * @param {Number} tamMin | No obligatorio | El tamaño mínimo de caracteres a comparar
 * @param {Number} tamMax | No obligatorio | El tamaño máximo de caracteres a comparar
 * @returns {Boolean}
 */
class Validador {
    constructor(campoId, validacion, tamMin, tamMax, nomItem) {
        this.campoTexto = "";
        this.campoId    = campoId || "";
        this.validacion = validacion || 99;
        this.tamMin     = tamMin || 0;
        this.tamMax     = tamMax || 9999;        
        this.label      = nomItem || $("#label-"+campoId).text() || "campo en blanco"; 
        console.log(this.label);
    }
valCampoTexto(){  
    
    /**
     * 
     * @type Element.value Obtiene el valor del elemento ingresado por el usuario
     */    
    this.campoTexto = $("#"+this.campoId).val();    
    switch (this.validacion) {
        //[0] Para validar campos no vacios
        case 99:            
            return this.campoNoVacio(this.campoTexto, this.campoId);            
            break;
        //[1] Para validar campos de solo letras.
        case 1:
            return this.soloLetras(this.campoTexto, this.campoId);
            break;
        //[2] Para validar campos de solo numeros.
        case 2:
            return this.soloNumeros(this.campoTexto, this.campoId);
            break;
        //[3] Para validar tamaño mínimo del campo.
        case 3:
            return this.campoMin(this.campoTexto, this.campoId, this.tamMin);
            break;
        //[4] Para validar tamaño máximo del campo.
        case 4:
            return this.campoMax(this.campoTexto, this.campoId, this.tamMax);
            break;
        //[5] Para validar campos no vacios y que solo contengan letras.
        case 5:
            return  this.campoNoVacio(this.campoTexto, this.campoId) && 
                    this.soloLetras(this.campoTexto, this.campoId);
            break;        
        //[6] Para validar campos no vacios y que solo contengan números;
        case 6:
            return this.campoNoVacio(this.campoTexto, this.campoId) && 
                    this.soloNumeros(this.campoTexto, this.campoId);
            break;        
        //[7] Para validar campos no vacios y sin caracteres especiales;
        case 7:
            return this.campoNoVacio(this.campoTexto, this.campoId) && 
                    this.soloLetNum(this.campoTexto, this.campoId);
            break;
        //[8] Para validar campos no vacios y con un minimo de caracteres;
        case 8:
            return this.campoNoVacio(this.campoTexto, this.campoId) && 
                    this.campoMin(this.campoTexto, this.campoId, this.tamMin);
            break;          
        //[9] Para validar campos no vacios y con un máximo de caracteres;
        case 9:
            return this.campoNoVacio(this.campoTexto, this.campoId) && 
                    this.campoMax(this.campoTexto, this.campoId, this.tamMax);
            break; 
        //[10] Para validar campos no vacios, con un mínimo y máximo de caracteres;
        case 10:
            return  this.campoNoVacio(this.campoTexto, this.campoId)       && 
                    this.campoMin(this.campoTexto, this.campoId, this.tamMin)  && 
                    this.campoMax(this.campoTexto, this.campoId, this.tamMax);
            break; 
        //[11] Para validar campos no vacios, con un mínimo y máximo de caracteres y con solo letras;
        case 11:
            return  this.campoNoVacio(this.campoTexto, this.campoId)            &&
                    this.soloLetras(this.campoTexto, this.campoId)              &&
                    this.campoMin(this.campoTexto, this.campoId, this.tamMin)   &&                     
                    this.campoMax(this.campoTexto, this.campoId, this.tamMax);
            break;
        //[12] Para validar campos no vacios, con un mínimo y máximo de caracteres y con solo números;
        case 12:
            return  this.campoNoVacio(this.campoTexto, this.campoId)            && 
                    this.campoMin(this.campoTexto, this.campoId, this.tamMin)   && 
                    this.soloNumeros(this.campoTexto, this.campoId)             &&
                    this.campoMax(this.campoTexto, this.campoId, this.tamMax);
            break;
        //[13] Para validar campos no vacios, con un mínimo y máximo de caracteres y sin caracteres especiales;
        case 13:
            return  this.campoNoVacio(this.campoTexto, this.campoId)       && 
                    this.campoMin(this.campoTexto, this.campoId, this.tamMin)  && 
                    this.campoMax(this.campoTexto, this.campoId, this.tamMax)  &&
                    this.soloLetNum(this.campoTexto, this.campoId);
            break;
        //[14] Para validar documentos;
        case 14:
            return  this.campoNoVacio(this.campoTexto, this.campoId)       && 
                    this.campoMin(this.campoTexto, this.campoId, this.tamMin)  &&                     
                    this.soloNumeros(this.campoTexto, this.campoId);
            break;        
        //[15] Para validar horarios;
        case 15:
            return  this.campoHorario(this.campoTexto, this.campoId);
            break;
        //[16] Para validar fechas;
        case 16:
            return  this.campoNoVacio(this.campoTexto, this.campoId)       && 
                    this.campoFecha(this.campoTexto, this.campoId);
            break;
        //[17] Para validar select list;
        case 17:            
            return  this.selectList(this.campoId, this.label);
            break;
        default :
            return true;
            break;
    }
    
    /**
     * En caso de que el valor sea nulo o contenga cero caracteres o no cumpla
     * con la expresión regular, no permite pasar al usuario y cambia la clase del atributo.
     * padre.
     *
     * @property {pattern} regex que valida ingreso de caracteres.
     * 
     * @function valText(texto) Realiza la validación del texto y retorna un numero según se cumpla ver @see valText().
     * @function parent() Retorna el item padre del item llamado con jquery
     * @function attr() Agrega un atributo al item definido, sus argumentos son ("atribut", "valor atributo").
     * @function append() Agrega un item html completo como hijo del item definido, sus argumentos son ("item").
     */        
    
}

/**
 * @description: 
 * [false] en caso de campo vacio.
 * [true] en caso de campo con caracteres.
 * 
 * EL CAMPO NO VACIO NO PERMITE ESPACIOS EN BLANCO!!!!
 * 
 * @param {String} campoTexto | texto del campo a validar
 * @param {String} campoId | El id del campo a verificar
 * @returns {Boolean}
 */
campoNoVacio(campoTexto, campoId){    
    //nulo
    if(campoTexto === null){
        return this.errorVal(campoId, "Por favor ingresar "+this.label);
    //Sin caracteres
    }else if(campoTexto.length === 0){
        return this.errorVal(campoId, "Por favor ingresar "+this.label);
    //Campo con espacios
    }else if(!(/^[\S]+/.test(campoTexto))){
        return this.errorVal(campoId, "El campo "+this.label+" no permite espacios vacios");
    //Campo con caracteres
    }else{
        return this.noErrorVal(campoId);
    }
}

/**
 * @description: 
 * [false] en caso de contener caracteres especiales o números.
 * [true] en caso de campo valido.
 *  
 * @param {String} campoTexto | texto del campo a validar
 * @param {String} campoId | El id del campo a verificar
 * @returns {Boolean}
 */
soloLetras(campoTexto, campoId){
    //Si contiene caracteres especiales o numeros
    if(!(/^[\S][A-Za-z\x{00C0}\x{017F}\s]*$/u.test(campoTexto))){
        return this.errorVal(campoId, "El campo "+this.label+" solo puede contener letras");
    }else{
        //Valor valido
        return this.noErrorVal(campoId);
    }
}

/**
 * @description: 
 * [false] en caso de contener caracteres especiales o letras
 * [true] en caso de campo valido
 *  
 * @param {String} campoTexto | texto del campo a validar
 * @param {String} campoId | El id del campo a verificar
 * @returns {Boolean}
 */
soloNumeros(campoTexto, campoId){  
    //Si contiene caracteres especiales o letras
    if(!(/^[\d]*$/.test(campoTexto))){
        return this.errorVal(campoId, "El campo "+this.label+" solo puede contener números");
    }else{
        //Valor valido
        return this.noErrorVal(campoId);
    }
}
            
/**
 * @description: 
 * [false] en caso de contener un caracter especial
 * [true] en caso de campo valido (solo letras o numeros).
 *  
 * @param {String} campoTexto | texto del campo a validar
 * @param {String} campoId | El id del campo a verificar
 * @returns {Boolean}
 */
soloLetNum(campoTexto, campoId){
    if(!(/[^a-z|^A-z|^\d^\s]+$/.test(campoTexto))){
        //Si contiene cualquier caracter especiales.
       return this.errorVal(campoId, "El campo "+this.label+" contiene caracteres especiales");
    }else{
        //Valor valido
        return this.noErrorVal(campoId);
    }
}

/**
 * @description:
 * [false] en caso de no cumplir con el tamaño mínimo.
 * [true] en caso de cumplir con el tamaño mínimo.
 * 
 * @param {String} campoTexto | texto del campo a validar
 * @param {String} campoId | El id del campo a verificar
 * @param {numer} tamMin | tamaño minimo del campo a validar 
 * @returns {Boolean}
 */
campoMin(campoTexto, campoId, tamMin){
    // construye la regex con la variable de tamaño.    
    var rex = new RegExp (".{"+tamMin+",}$");    
    //No cumple el min
    if(!(rex.test(campoTexto))){
        //console.log("no cumple min");
        return this.errorVal(campoId, "Su "+this.label+" tiene muy pocos caracteres");
    }else{
        //console.log("cumple min");
        return this.noErrorVal(campoId);
    }
}
    
/**
 * @description:
 * [false] en caso de no cumplir con el tamaño máximo
 * [true] en caso de cumplir con el tamaño máximo
 * 
 * @param {String} campoTexto | texto del campo a validar
 * @param {String} campoId | El id del campo a verificar
 * @param {numer} tamMax | tamaño máximo del campo a validar
 * @returns {Boolean}
 */
campoMax(campoTexto, campoId, tamMax){
    // construye la regex con la variable de tamaño.
    var rex = new RegExp (".{"+tamMax+",}$");
    //No cumple el max    
    if((rex.test(campoTexto))){
        return this.errorVal(campoId, "Su "+this.label+" tiene demasiados caracteres");
    }else{
        return this.noErrorVal(campoId);
    }
}

/**
 * @description:
 * [false] en caso de no cumplir con el formato de hora HH:MM
 * [true] en caso de cumplir con el formato
 * 
 * @param {String} campoTexto | texto del campo a validar
 * @param {String} campoId | El id del campo a verificar 
 * @returns {Boolean}
 */
campoHorario(campoTexto, campoId){
    if((/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/.test(campoTexto)) || (campoTexto.length === 0)){
        return this.noErrorVal(campoId);
    }else{
        return this.errorVal(campoId, "Su "+this.label+" no cumple con el formato de horario HH:MM");        
    }
}

/**
 * @description:
 * [false] en caso de no cumplir con el formato de fecha DD/MM/AAAA;
 * [true] en caso de cumplir con el formato
 * 
 * @param {String} campoTexto | texto del campo a validar
 * @param {String} campoId | El id del campo a verificar 
 * @returns {Boolean}
 */
campoFecha(campoTexto, campoId){
    if(!(/^(?:(?:(?:0?[1-9]|1\d|2[0-8])[-](?:0?[1-9]|1[0-2])|(?:29|30)[-](?:0?[13-9]|1[0-2])|31[-](?:0?[13578]|1[02]))[-](?:0{2,3}[1-9]|0{1,2}[1-9]\d|0?[1-9]\d{2}|[1-9]\d{3})|29[-]0?2[-](?:\d{1,2}(?:0[48]|[2468][048]|[13579][26])|(?:0?[48]|[13579][26]|[2468][048])00))$/.test(campoTexto))){
        return this.errorValSelect(campoId, "Su "+this.label+" no tiene el formato DD/MM/AAAA");
    }else{
        return this.noErrorValSelect(campoId);
    }
}

/**
 * @description:
 * 
 * 
 * @param {String} nomItem | El nombre del select list a validar
 * @param {String} campoId | El id del campo a verificar 
 * @returns {Boolean}
 */
selectList(campoId, nomItem){           
    if(!(/.+[^\.]$/.test(this.label))){      
        console.log(nomItem);
        return this.errorValSelect(campoId, "Debe seleccionar una opción del campo "+nomItem);
    }else{        
        return this.noErrorValSelect(campoId);
    }
}

/**
 * 
 * @param {string} campoId | El id del item a verificar
 * @param {string} mensaje | El mensaje que se desea mostrar al usuario
 * @returns {Boolean} Retorna false por que no se cumple la validación
 */
errorVal(campoId, mensaje){      
    //En caso de que ya exista el ícono lo eliminamos 
    $("#iconTex"+campoId).remove();
    //Obtengo el elemento de entrada normalmente el INPUT y le defino la clase error de bootstrap para marcar el campo errado.
    $("#"+campoId).parent().parent().attr("class", "form-group has-error has-feedback");	
    //Agrego icono X en el campo errado
    $("#"+campoId).parent().parent().append("<span id='iconTex"+campoId+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
    //Muestro el mensaje de ayudar.
    $("#msj-"+campoId).text(mensaje).show();
    return false;
}

/**
 * 
 * @param {string} campoId | El id del item a verificar
 * @returns {Boolean} Retorna true por que cumple con la validación.
 */
noErrorVal(campoId){   
    //En caso de que ya exista el ícono lo eliminamos 
    $("#iconTex"+campoId).remove();
    //Obtengo el elemento y le defino la clase error de bootstrap para marcar el campo errado.
    $("#"+campoId).parent().parent().attr("class", "form-group has-success has-feedback");	
    //Agrego icono OK en el campo correcto
    $("#"+campoId).parent().parent().append("<span id='iconTex"+campoId+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
    //Oculto el mensaje de ayudar.
    $("#msj-"+campoId).hide();
    return true;
}

/**
 * 
 * @param {string} campoId | El id del item a verificar
 * @param {string} mensaje | El mensaje que se desea mostrar al usuario
 * @returns {Boolean} Retorna false por que no se cumple la validación
 */
errorValSelect(campoId, mensaje){      
    //En caso de que ya exista el ícono lo eliminamos 
    //$("#iconTex"+campoId).remove();
    //Obtengo el elemento de entrada normalmente el INPUT y le defino la clase error de bootstrap para marcar el campo errado.
    $("#"+campoId).parent().parent().parent().attr("class", "form-group has-error has-feedback");	
    //Agrego icono X en el campo errado
    //$("#"+campoId).parent().parent().append("<span id='iconTex"+campoId+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
    //Muestro el mensaje de ayudar.
    $("#msj-"+campoId).text(mensaje).show();
    return false;
}

/**
 * 
 * @param {string} campoId | El id del item a verificar
 * @returns {Boolean} Retorna true por que cumple con la validación.
 */
noErrorValSelect(campoId){   
    //En caso de que ya exista el ícono lo eliminamos 
    //$("#iconTex"+campoId).remove();
    //Obtengo el elemento y le defino la clase error de bootstrap para marcar el campo errado.
    $("#"+campoId).parent().parent().parent().attr("class", "form-group has-success has-feedback");	
    //Agrego icono OK en el campo correcto
    //$("#"+campoId).parent().parent().append("<span id='iconTex"+campoId+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
    //Oculto el mensaje de ayudar.
    $("#msj-"+campoId).hide();
    return true;
}

}   