<?php

//index.php file
define('ROOT_PATH', dirname(__DIR__) . '/utleon.edu.mx/vista/');

class Route {

    private function simpleRoute($file, $route){
        //Version antes de parametros en URL
        // if(!empty($_SERVER['REQUEST_URI'])){
        //     $route = preg_replace("/(^\/)|(\/$)/","",$route);
        //     $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_SERVER['REQUEST_URI']);
        // }else{
        //     $reqUri = "/";
        // }

        // if($reqUri == $route){
        //     $params = [];
        //     include($file);
        //     exit();
        // }

        // Remove query string for route matching
        $reqUri = $_SERVER['REQUEST_URI'];
        $route = preg_replace("/(^\/)|(\/$)/", "", $route);

        // Remove query string part (anything after '?') from the request URI
        $reqUri = preg_replace("/\?.*$/", "", $reqUri);
        $reqUri = preg_replace("/(^\/)|(\/$)/", "", $reqUri);

        if ($reqUri == $route) {
            include($file);
            exit();
        }
    }

    function add($route,$file){

        //will store all the parameters value in this array
        $params = [];

        //will store all the parameters names in this array
        $paramKey = [];

        //finding if there is any {?} parameter in $route
        preg_match_all("/(?<={).+?(?=})/", $route, $paramMatches);

        //if the $route does not contain any param call simpleRoute();
        if(empty($paramMatches[0])){
            $this->simpleRoute($file,$route);
            return;
        }

        //setting parameters names
        foreach($paramMatches[0] as $key){
            $paramKey[] = $key;
        }

        
        //replacing first and last forward slashes
        //$_SERVER['REQUEST_URI'] will be empty if req uri is /

        if(!empty($_SERVER['REQUEST_URI'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_SERVER['REQUEST_URI']);
        }else{
            $reqUri = "/";
        }

        //exploding route address
        $uri = explode("/", $route);

        //will store index number where {?} parameter is required in the $route 
        $indexNum = []; 

        //storing index number, where {?} parameter is required with the help of regex
        foreach($uri as $index => $param){
            if(preg_match("/{.*}/", $param)){
                $indexNum[] = $index;
            }
        }

        //exploding request uri string to array to get
        //the exact index number value of parameter from $_SERVER['REQUEST_URI']
        $reqUri = explode("/", $reqUri);

        //running for each loop to set the exact index number with reg expression
        //this will help in matching route
        foreach($indexNum as $key => $index){

            //in case if req uri with param index is empty then return
            //because url is not valid for this route
            if(empty($reqUri[$index])){
                return;
            }

            //setting params with params names
            $params[$paramKey[$key]] = $reqUri[$index];

            //this is to create a regex for comparing route address
            $reqUri[$index] = "{.*}";
        }

        //converting array to sting
        $reqUri = implode("/",$reqUri);

        //replace all / with \/ for reg expression
        //regex to match route is ready !
        $reqUri = str_replace("/", '\\/', $reqUri);

        //now matching route with regex
        if(preg_match("/$reqUri/", $route))
        {
            include($file);
            exit();
        }
    }

    function notFound($file){
        include($file);
        exit();
    }
}
$route = new Route();

//inicio
$route->add("","vista/index.php");
$route->add("/","vista/index.php");
$route->add("/home","vista/index.php");

$route->add("/test","vista/index.php");
$route->add("/test/{param1}/{param2}","vista/index.php");


$route->add("/zonas","vista/zonas.php");
$route->add("/zonas2","vista/zonas2.php");

// Rutas del menú sidebar
// CONOCE LA UTL
$route->add("/nuestro-rector", "vista/pages/nuestro_rector.php");
$route->add("/historia","vista/pages/historia.php");
$route->add("/filosofia", "vista/pages/filosofia.php");
$route->add("/consejo-directivo", "vista/pages/consejo_directivo.php");
$route->add("/pide", "vista/pages/pide.php");
// $route->add("/utl-en-cifras", "vista/pages/utl_en_cifras.php");
$route->add("/organos-colegiados", "vista/pages/organos_colegiados.php");
$route->add("/contraloria", "vista/pages/contraloria.php");
$route->add("/finanzas", "vista/pages/finanzas.php");
$route->add("/informacion-financiera", "vista/pages/info_financiera.php");
$route->add("/utl-en-cifras", "vista/pages/utl_cifras.php");


// CALIDAD
$route->add("/politica-calidad-inst", "vista/pages/politica_calidad_inst.php");
$route->add("/certificaciones", "vista/pages/certificaciones.php");
$route->add("/acreditaciones", "vista/pages/acreditaciones.php");
$route->add("/sgi", "vista/pages/sgi.php");

$route->add("/difusion-e-imagen", "vista/pages/difusion_imagen.php");
$route->add("/comunicacion-y-eventos", "vista/pages/comunicacion_eventos.php");

// Servicios Universitarios
$route->add("/cultura-y-deporte", "vista/pages/act_cultura_deporte.php");
$route->add("/programa-tutorias", "vista/pages/programa_tutorias.php");
$route->add("/atencion-psico", "vista/pages/atencion_psico.php");
$route->add("/emprendimiento", "vista/pages/emprendimiento.php");
$route->add("/centro-informacion", "vista/pages/centro_informacion.php");

// $route->add("/centro-idiomas", "vista/pages/centro_idiomas.php");
$route->add("/salud-integral", "vista/pages/salud_integral.php");
$route->add("/laboratorios", "vista/pages/laboratorios.php");
// $route->add("/altas-internet", "vista/pages/altas_internet.php");
$route->add("/centros-de-computo", "vista/pages/centros_computo.php");
$route->add("/aula-virtual", "vista/pages/aula_virtual.php");
$route->add("/estadias", "vista/pages/estadias.php");
$route->add("/estadias-especiales", "vista/pages/estadias_especiales.php");
$route->add("/investigacion-estudiantil", "vista/pages/investigacion_est.php");

// TRAMITES ESCOLARES
$route->add("/solicitud-constancia", "vista/pages/solicitud_const.php");
$route->add("/tramite-credencial", "vista/pages/tramite_credencial.php");
$route->add("/tramite-estudiantil-imss", "vista/pages/tramite_imss.php");
$route->add("/becas", "vista/pages/becas.php");
$route->add("/pago-regularizacion", "vista/pages/pago_regularizacion.php");
$route->add("/reinscripcion", "vista/pages/reinscripcion.php");
$route->add("/reingreso", "vista/pages/reingreso.php");
$route->add("/tramites-baja", "vista/pages/tramites_baja.php");
$route->add("/titulacion-TSU", "vista/pages/titulacion_TSU.php");
$route->add("/titulacion-Lic-Ing", "vista/pages/titulacion_Lic_Ing.php");

// ASPIRANTES
$route->add("/oferta-educativa", "vista/pages/oferta_educativa.php");
$route->add("/modelo-educativo", "vista/pages/modelo_educativo.php");
$route->add("/becas-y-apoyos", "vista/pages/becas_apoyos.php");
$route->add("/proceso-admision", "vista/pages/proceso_admision.php");
$route->add("/becas-aspirante", "vista/pages/becas_aspirante.php");
$route->add("/ubicaciones", "vista/pages/ubicacion.php");
$route->add("/carreras", "vista/pages/carreras.php");

// CARRERAS
$route->add("/entornos-virtuales", "vista/pages/entornos_virtuales.php");


$route->add("/catalogo-eventos", "vista/pages/catalogo_eventos.php");
$route->add("/test-img", "test.html");
$route->add("/carrusel", "vista/pages/carrusel.php");




// $route->add("", "");
// $route->add("", "");




//example route with multiple params
$route->add("/home/{param1}","vista/index.php");

$route->add("/test/{param1}/{param2}","vista/test.php");
$route->add("/informacion/{param1}","vista/test.php");
$route->add("/formacion","vista/test.php");

$route->notFound("404.php");
?>