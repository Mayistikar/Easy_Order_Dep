<?php
/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "init.php"  Version:  1.0.
 * 
 * Descripción: LLama todos los objetos requerido para el arranque del aplicativo.
 *
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 30/09/2017 | 12:59:08 AM.
 */

//LIBERIAS EXTERNAS DE FUNCIONAMIENTO GENERAL
require SYS_PATH."App.php";
require SYS_PATH."Render.php";
require SYS_PATH."errorNoControlado.php";
require SYS_PATH."Controller.php";
require APP_PATH."controllers/HomeController.php";
require SYS_PATH."DB.php";
require SYS_PATH."Model.php";
require SYS_PATH."AccesoExt.php";
require SYS_PATH."Validador.php";

//MODULO ADMINISTRADOR
require ADM_PATH.MODS."UsuarioModelAdm.php";
require ADM_PATH.MODS."TipoDocumentoModelAdm.php";
require ADM_PATH.MODS."GeneroModelAdm.php";
require ADM_PATH.MODS."CargoModelAdm.php";
require APP_PATH.MODS."UnidadesMedidaModel.php";
require APP_PATH.MODS."TipoProdModelAdm.php";
require ADM_PATH.MODS."CombosModelAdm.php";
require ADM_PATH.MODS."ProductoModelAdm.php";
require ADM_PATH.MODS."PromosModelAdm.php";

//MODULO MENU
require MEN_PATH.MODS."PedidoModelMen.php";
require MEN_PATH.MODS."DetallePedidoModelMen.php";

//MODULO CHEF
require CHE_PATH.MODS."OrdenModelChe.php";