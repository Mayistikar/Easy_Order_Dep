<?php
chdir(dirname(__DIR__)); //Todas las direcciones serán relativas a la raiz
//echo dirname(__DIR__);
define("SYS_PATH", "lib/");
define("APP_PATH", "app/");
define("ADM_PATH", "admin_mod/");
define("MEN_PATH", "menu_mod/");
define("CHE_PATH", "chef_mod/");

require SYS_PATH."constantes.php";
require SYS_PATH."init.php";

$app = new App();