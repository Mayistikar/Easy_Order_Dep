<!DOCTYPE html>
<!--
PROYECTO EASY ORDER

Módulo:
Documento: "articleViewAdm.php"  Version:  1.0.
Descripción:
Autor: andersonrodriguezce@gmail.com.
Fecha creación: 30/09/2017 | 03:37:33 PM.
-->
        <article  class="col-md-9">
            <center>
                <h1><span class="label label-success">DATOS DE USUARIO</span></h1>
            </center>
            
            <div class="container col-md-10  col-md-offset-1">
            
            <!-- COLUMNA1 -->
                <div class="col-md-6 form-group">
                    <div class="input-group ">
                        <span class="control-label  input-group-addon list-group-item-success">Codigo</span>
                        <input class="form-control" type="text" name="codigo" id="codigo">
                    </div>                  
                    <br>                 
                    <div class="input-group ">
                        <span class="control-label  input-group-addon list-group-item-success">Marca</span>
                        <input class="form-control" type="text" name="marca" id="marca">
                    </div>                                                                             
                    <br>
                    <div class="input-group ">
                        <span class="input-group-addon list-group-item-success">Fecha de vencimiento</span>
                        <div class="input-group date" id='sandbox-container'>
                            <input type="text" id="txtFecha" class="form-control" name="venc" id="venc">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="input-group ">
                        <span class="control-label  input-group-addon list-group-item-success">Ingredientes</span>
                        <input class="form-control" type="text" name="ingr" id="ingr">
                    </div> 
                    <br>
                    <div class="input-group ">
                        <span class="control-label  input-group-addon list-group-item-success">IVA</span>
                        <input class="form-control" type="text" name="iva" id="iva">
                    </div>      
                </div>                            
                
                <!-- FIN COLUMNA1 -->

                <!-- COLUMNA2 -->
                <div class="col-md-6 form-group">

                    <div class="input-group ">
                        <span class="control-label  input-group-addon list-group-item-success">Nombre</span>
                        <input class="form-control" type="text" name="nombre" id="nombre">
                    </div>
                    <br>
                    <div class="input-group ">
                        <span class="control-label  input-group-addon list-group-item-success">Precio</span>
                        <input class="form-control" type="text" name="precio" id="precio">
                    </div>
                    <br>
                    <div class="input-group ">
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" name="btn-dd" id="btn-dd" class="btn btn-danger" value="None">Estado Producto</button>
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu btn-prep" aria-labelledby="dropdownMenu1">
                                <li><a href="#">Preparado</a></li>
                                <li><a href="#">Sin preparar</a></li>
                                <li><a href="#">En preparación</a></li>
                            </ul>     
                        </div>
                    </div>  
                    <br>
                    <div class="input-group ">
                        <span class="control-label  input-group-addon list-group-item-success">Cantidad</span>
                        <input class="form-control" type="text" name="cant" id="cant">
                    </div>
                    <br>
                    <div class="input-group ">
                        <span class="control-label  input-group-addon list-group-item-success">Descripción</span>
                        <input class="form-control" type="text" name="desc" id="desc">
                    </div>             
                </div>
                <!-- FIN COLUMNA2 -->    
            
            </div>
        </article>
    </section>
</div>