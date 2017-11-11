/*jslint browser: true*/
/*global $, jQuery, alert*/

//Función Split btn Genero
$("#btn-genero ul li a").click(function () {
    'strict';
    var selText = $(this).text();	
    $(this).parents('.btn-group').find('#btn-dd').html('<span id="label-btnGen">'+selText+'</span><input type="hidden" id="label-gen" name="genero" value="'+selText+'"></input>');
});

//Función Split btn Cargo
$("#btn-cargo ul li a").click(function () {
    'strict';
    var selText = $(this).text();
    $(this).parents('.btn-group').find('#btn-dd').html('<span id="label-btnCar">'+selText+'</span><input type="hidden" id="label-car" name="cargo" value="'+selText+'"></input>');
});

//Función split button para labels tipo documento
$("#id-doc li a").click(function(){    
    var selDoc = $(this).text(); 
    $(this).parents('.input-group-btn').find('#btn-documento').html('<span id="label-btnDoc">'+selDoc+'</span><input type="hidden" id="label-tipo-doc" name="tipo-doc" value="'+selDoc+'"></input>');
});
	
//Función split button para labels tipo HORA ENTRADA
$("#id-horaIn li a").click(function(){    
    var selHoraIn = $(this).text(); 
    $(this).parents('.input-group-btn').find('#btn-horaIn').html('<span id="label" name="horaIn">'+selHoraIn+'</span>');
});

//Función split button para labels tipo HORA SALIDA
$("#id-horaOut li a").click(function(){    
    var selHoraOut = $(this).text(); 
    $(this).parents('.input-group-btn').find('#btn-horaOut').html('<span id="label" name="horaOut">'+selHoraOut+'</span>');
});