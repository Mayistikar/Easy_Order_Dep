/*jslint browser: true*/
/*global $, jQuery, alert*/

//############################# FUNCIONES FORMULARIO CREAR PRODUCTO #############################\\

//Función Split btn UNIDAD MEDIDA
$("#btn-unMedProd ul li a").click(function () {
    'strict';
    var selUmed = $(this).text();	
    $(this).parents('.btn-group').find('#btn-dd').html('<span id="label-btnMedProd">'+selUmed+'</span><input type="hidden" id="label-btnMedProd" name="unMedProd" value="'+selUmed+'"></input>');
});


//Función Split btn TIPO PRODUCTO
$("#btn-tiProd ul li a").click(function () {
    'strict';
    var selTiProd = $(this).text();	
    $(this).parents('.btn-group').find('#btn-dd').html('<span id="label-btnTiProd">'+selTiProd+'</span><input type="hidden" id="label-btnTiProd" name="tiProd" value="'+selTiProd+'"></input>');
});

//Función Split btn PROMOCION
$("#btn-promProd ul li a").click(function () {
    'strict';
    var selpromProd = $(this).text();	
    $(this).parents('.btn-group').find('#btn-dd').html('<span id="label-btnPromProd">'+selpromProd+'</span><input type="hidden" id="label-btnPromProd" name="promProd" value="'+selpromProd+'"></input>');
});


//Función Split btn COMBO
$("#btn-comProd ul li a").click(function () {
    'strict';
    var btnComProd = $(this).text();	
    $(this).parents('.btn-group').find('#btn-dd').html('<span id="label-btnComProd">'+btnComProd+'</span><input type="hidden" id="label-btnComProd" name="comProd" value="'+btnComProd+'"></input>');
});

//############################# FUNCIONES FORMULARIO CREAR PRODUCTO #############################\\