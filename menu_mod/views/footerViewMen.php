<!--
PROYECTO EASY ORDER

Módulo: Administrador
Documento: "footerViewAdm.php"  Version:  1.0.
Descripción: Vista plantilla general para pintar el footer y cargar archivos js generales.
Autor: andersonrodriguezce@gmail.com.
Fecha creación: 30/09/2017 | 04:05:12 AM.
-->
    <--  CAPA HIDDEN QUE MUESTRA LA LISTA DE PRODUCTOS ADQUIRIDOS -->
    <div class="row container" id="capa">
        <div class="form-group">
            <button type="submit" id="ordenar" class="btn btn-success hidden">
                <h4><span class="icon-comida-3"></span> <b>Ordenar</b></h4>
            </button>
        </div>
        <h3>
            <p id="compra" class="hidden">Adquirido:</p>
        </h3>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <p class="team-eo"><strong>Team Easy Order</strong><p>
                    <h4>Derechos Reservados | &copy 2017 </h4>
                </div>
                <div class="col-xs-4">
                    <ul class="list-unstyled text-right ">
                        <li>
                            <a href="#" class="team-names">
                            	<b>Alejandro Teylor - Software Analyst</b>
                           	</a>
                        </li>
                        <li>
                            <a href="#" class="team-names">
                            	<b>Anderson Rodriguez - Software Architect</b>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="team-names">
                            	<b>Edwin Ávila - Software Designer</b>
                            </a>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="list-unstyled text-left">                     
                        <li>
                            <a href="#" class="team-names">
                            	<b>Jonathan Díaz - Software Analyst</b>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="team-names">
                            	<b>Moises Urueña - Software Designer</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- AGREGANDO FUNCIONES ALERTIFYJS Y MOBILE-->
    <script src="/Easy_Order_Dev_ARC/lib/alertifyjs/alertify.min.js"></script>
    <!-- AGREGANDO FUNCIONES ALERTIFYJS Y MOBILE-->
        
    <!-- AGREGANDO FUNCIONES NEGOCIO-->
    <script src="/Easy_Order_Dev_ARC/menu_mod/views/js/solicitarPedido.js"></script>
    <!-- AGREGANDO FUNCIONES NEGOCIO-->   
         
    </body>
</html>
