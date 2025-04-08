<?php



class ComandoEventos{

    function __construct() {}

    /**
     * It takes an object as a parameter, and inserts the values of the object into the database.
     * 
     * @param p is the object that contains the data to be inserted
     * 
     * @return The return is a boolean value, true or false.
     */
    function insertEvento($p){
        try {
             //var_dump($p->titulo);
            $con = Conexion::getInstance()->obtenerConexion();
            if ($con === null) {
                error_log("Error: La conexión a la base de datos es nula");
                return ['success' => false, 'error' => 'Error de conexión'];
            }
            $this->SQL = "insert into 
            eventos(titulo,fecha,fecha_fin,hora_inicio,hora_fin,lugar,informacion,activo,cve_usuario,destacado, fecha_registro) 
            value(:titulo,:fecha,:fecha_fin,:hora_inicio,:hora_fin,:lugar,:informacion,:activo,:cve_usuario,:destacado,now())";
            if ($con != null) {			
                $this->sta = $con->prepare($this->SQL);
                $this->sta->bindValue(':titulo', $p->titulo, PDO::PARAM_STR);
                $this->sta->bindValue(':fecha', $p->fecha, PDO::PARAM_STR);
                $this->sta->bindValue(':fecha_fin', $p->fecha_fin, PDO::PARAM_STR);
                $this->sta->bindValue(':hora_inicio', $p->hora_inicio, PDO::PARAM_STR);
                $this->sta->bindValue(':hora_fin', $p->hora_fin, PDO::PARAM_STR);
                $this->sta->bindValue(':lugar', $p->lugar, PDO::PARAM_STR);
                $this->sta->bindValue(':informacion', $p->informacion, PDO::PARAM_STR);
                $this->sta->bindValue(':activo', 0, PDO::PARAM_INT);
                $this->sta->bindValue(':destacado', 0, PDO::PARAM_INT);
                $this->sta->bindValue(':cve_usuario', $p->cve_usuario, PDO::PARAM_INT);
                
                if (!$this->sta->execute()) {
                    throw new Exception("Error al ejecutar la consulta");
                }
                
                return $con->lastInsertId();
                
            }
        }catch (Exception $e){
            error_log("ERROR en insertEvento: " . $e->getMessage());
            return 0;

        }finally{
            Conexion::getInstance()->cerrarConexion();
        }
    }

    function obtenerUltimoEventoId() {
        try {
            $con = Conexion::getInstance()->obtenerConexion();
            $this->SQL = "SELECT cve_eventos FROM eventos ORDER BY cve_eventos DESC LIMIT 1";
            
            $this->sta = $con->prepare($this->SQL);
            $this->sta->execute();
            
            $result = $this->sta->fetch(PDO::FETCH_ASSOC);
            return $result ? (int)$result['cve_eventos'] : 0;
            
        } catch (Exception $e) {
            error_log("Error en obtenerUltimoEventoId: " . $e->getMessage());
            return 0;
        } finally {
            Conexion::getInstance()->cerrarConexion();
        }
    }

    /**
     * It returns an array of associative arrays, each of which contains the data for one row of the
     * table.
     * 
     * @return Array
     * (
     *     [0] => Array
     *         (
     *             [cve_eventos] => 1
     *             [titulo] => Evento 1
     *             [url] => 
     *             [fecha] => 2017-01-01
     *             [fecha_fin] => 2017-01-01
     *             [hora_inicio
     */
    public function getTabla() {
        try {
            $result = [];
            $con = Conexion::getInstance()->obtenerConexion();

            if ($con != null) {
                $consulta = "SELECT 
                eventos.cve_eventos,
                eventos.titulo,
                eventos.fecha,
                eventos.fecha_fin,
                eventos.hora_inicio,
                eventos.hora_fin,
                eventos.lugar,
                eventos.informacion,
                eventos.activo,
                eventos.destacado,
                (SELECT COUNT(*) FROM eventos_imagenes WHERE eventos_imagenes.cve_eventos = eventos.cve_eventos) AS no_imagenes,
                (SELECT imagenes.url FROM eventos_imagenes 
                    JOIN imagenes ON eventos_imagenes.cve_imagenes = imagenes.cve_imagenes 
                    WHERE eventos_imagenes.cve_eventos = eventos.cve_eventos 
                    AND imagenes.portada = 1 LIMIT 1) AS url_portada
                FROM eventos
                ORDER BY eventos.fecha DESC";

                $stmt = $con->prepare($consulta );
                //$stmt->bindParam(":cve", $cve);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            return $result;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }finally{
            Conexion::getInstance()->cerrarConexion();
        }
    }

    /**
     * It updates the evento table with the values of the parameters passed to the function
     * 
     * @param p is the object that contains the data to be updated.
     * 
     * @return The return is a boolean value, true or false.
     */
    function updateEvento($p){
        try {
            //var_dump($p->titulo);
            $Conexion = Conexion::getInstance()->obtenerConexion();
            $this->SQL = "UPDATE eventos 
            set titulo=:titulo,fecha=:fecha,fecha_fin= :fecha_fin,
            hora_inicio= :hora_inicio,hora_fin= :hora_fin,lugar= :lugar,
            informacion= :informacion , cve_usuario=:cve_usuario, fecha_registro= now() 
                            WHERE cve_eventos=:cve_evento  ";
			if ($Conexion != null) {			
                $this->sta = $Conexion->prepare($this->SQL);
                $this->sta->bindValue(':titulo', $p->titulo, PDO::PARAM_STR);
                $this->sta->bindValue(':fecha', $p->fecha, PDO::PARAM_STR);
                $this->sta->bindValue(':fecha_fin', $p->fecha_fin, PDO::PARAM_STR);
                $this->sta->bindValue(':hora_inicio', $p->hora_inicio, PDO::PARAM_STR);
                $this->sta->bindValue(':hora_fin', $p->hora_fin, PDO::PARAM_STR);
                $this->sta->bindValue(':lugar', $p->lugar, PDO::PARAM_STR);
                $this->sta->bindValue(':informacion', $p->informacion, PDO::PARAM_STR);
                $this->sta->bindValue(':cve_usuario', $p->cve_usuario, PDO::PARAM_STR);
                $this->sta->bindValue(':cve_evento', $p->cve_evento, PDO::PARAM_STR);
                return $this->sta->execute();
            }
        }catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }finally{
            Conexion::getInstance()->cerrarConexion();
        }
    }

    /**
     * It takes a parameter, , which is an object with two properties, activo and cve_evento, and
     * then it updates the database with the values of those properties.
     * 
     * @param p is the object that contains the data to be updated.
     * 
     * @return The return is a boolean value.
     */
    function publicarEvento($p){
        try {
            //var_dump($p->titulo);
            $Conexion = Conexion::getInstance()->obtenerConexion();
            $this->SQL = "UPDATE eventos set activo=:activo  
                            WHERE cve_eventos=:cve_evento  ";
			if ($Conexion != null) {				
                $this->sta = $Conexion->prepare($this->SQL);
                $this->sta->bindValue(':activo', $p->activo, PDO::PARAM_STR);
                $this->sta->bindValue(':cve_evento', $p->cve_evento, PDO::PARAM_STR);
            return $this->sta->execute();
            }
        }catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }finally{
            Conexion::getInstance()->cerrarConexion();
        }
    }

    /**
     * It takes a parameter, , which is an object, and then it updates a row in a database table.
     * 
     * @param p is the object that contains the data to be updated.
     * 
     * @return The result of the query.
     */
    function eventoDestacado($p){
        try {
            //var_dump($p->titulo);
            $Conexion = Conexion::getInstance()->obtenerConexion();
            $this->SQL = "UPDATE eventos set destacado=:destacado  
                            WHERE cve_eventos=:cve_evento  ";
			if ($Conexion != null) {				
                $this->sta = $Conexion->prepare($this->SQL);
                $this->sta->bindValue(':destacado', $p->destacado, PDO::PARAM_STR);
                $this->sta->bindValue(':cve_evento', $p->cve_evento, PDO::PARAM_STR);
            return $this->sta->execute();
            }
        }catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }finally{
            Conexion::getInstance()->cerrarConexion();
        }
    }

    /**
     * It deletes a row from the database table "eventos" where the column "cve_eventos" is equal to
     * the value of the variable "".
     * 
     * @param cve_evento is the primary key of the table
     * 
     * @return The return is a boolean value, true or false.
     */
    function eliminarEvento($cve_evento){
        try {
            $Conexion = Conexion::getInstance()->obtenerConexion();
            $this->SQL = "DELETE FROM eventos
                            WHERE cve_eventos= :cve_evento";
            if ($Conexion != null) {	                
                $this->sta = $Conexion->prepare($this->SQL);
                $this->sta->bindValue(':cve_evento', $cve_evento, PDO::PARAM_STR);
                return $this->sta->execute();
            }
        }catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }finally{
            Conexion::getInstance()->cerrarConexion();
        }
    }

/**
 * It gets all the images from the database and returns them as an array.
 * 
 * @return An array of associative arrays.
 */
    public function getImagenes($cve) {
        try{
            $result = [];
            $con = Conexion::getInstance()->obtenerConexion();

            if ($con != null) {
                $consulta = "SELECT imagenes.cve_imagenes, imagenes.nombre, imagenes.url,imagenes.portada,eventos_imagenes.cve_eventos
                FROM eventos_imagenes 
                INNER JOIN imagenes ON eventos_imagenes.cve_imagenes=imagenes.cve_imagenes
                WHERE eventos_imagenes.cve_eventos= :cve";
                $stmt = $con->prepare($consulta );
                $stmt->bindParam(":cve", $cve);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            error_log($e->getMessage()) ;
            $result = [];
        }finally{
            Conexion::getInstance()->cerrarConexion();
        }
        return $result;
    }

    /**
     * It inserts an image into the database
     * 
     * @param p is an object that contains the following properties:
     * 
     * @return The last inserted id.
     */
    function insertarImagen($p){
        try{
            $Conexion = Conexion::getInstance()->obtenerConexion();
            $this->SQL = "INSERT INTO imagenes(nombre,url,portada) VALUE(:nombre,:url, :portada)";
            if ($Conexion != null) {	                
                $this->sta = $Conexion->prepare($this->SQL);
                $this->sta->bindValue(':nombre', $p->nombre, PDO::PARAM_STR);
                $this->sta->bindValue(':url', $p->ruta, PDO::PARAM_STR);
                $this->sta->bindValue(':portada', $p->portada, PDO::PARAM_STR);
                $this->sta->execute();
                $id = $Conexion->lastInsertId();
                return $id;
            }
        }catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }finally{
            Conexion::getInstance()->cerrarConexion();
        }
    }

    function asociarImagenAEvento($cve_evento, $imagenData) {
        try {
            
            $cve_imagen = $this->insertarImagen($imagenData);
            
            if ($cve_imagen) {
            
                return $this->insertarImagenEvento($cve_evento, $cve_imagen);
            }
            return false;
        } catch (Exception $e) {
            error_log("Error en asociar imagen a un evento: " . $e->getMessage());
            return false;
        }
    }

    /**
     * It updates the portada column of the imagenes table to 0 for all rows that have the same
     * cve_eventos as the one passed in, then it updates the portada column of the imagenes table to 1
     * for the row that has the cve_imagenes passed in.
     * 
     * @param cve_imagenes is the id of the image
     * @param portada 1
     * @param cve_evento is the id of the event
     * 
     * @return The result of the query.
     */
    function updatePortada($cve_imagenes,$portada,$cve_evento){
        try{
            $Conexion = Conexion::getInstance()->obtenerConexion();
            $this->SQL = "
            UPDATE imagenes a
                INNER JOIN eventos_imagenes b ON a.cve_imagenes = b.cve_imagenes
                SET a.portada = 0
                WHERE b.cve_eventos=:cve_evento;
            update imagenes SET portada=:portada WHERE cve_imagenes=:cve_imagenes ;";
            if ($Conexion != null) {	                
                $this->sta = $Conexion->prepare($this->SQL);
                $this->sta->bindValue(':portada', $portada, PDO::PARAM_STR);
                $this->sta->bindValue(':cve_imagenes', $cve_imagenes, PDO::PARAM_STR);
                $this->sta->bindValue(':cve_evento', $cve_evento, PDO::PARAM_STR);
                
                return $this->sta->execute();
                
            }
        }catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }finally{
            Conexion::getInstance()->cerrarConexion();
        }
    }

    /**
     * It inserts a new row into the database with the values of the parameters
     * 
     * @param cve_eventos 1
     * @param cve_imagenes 1
     * 
     * @return The last inserted id.
     */
    function insertarImagenEvento($cve_eventos,$cve_imagenes){
        try{
            $Conexion = Conexion::getInstance()->obtenerConexion();
            $this->SQL = "INSERT INTO eventos_imagenes(cve_eventos, cve_imagenes) VALUE(:cve_eventos,:cve_imagenes)";
            if ($Conexion != null) {	                
                $this->sta = $Conexion->prepare($this->SQL);
                $this->sta->bindValue(':cve_eventos', $cve_eventos, PDO::PARAM_STR);
                $this->sta->bindValue(':cve_imagenes', $cve_imagenes, PDO::PARAM_STR);
                $this->sta->execute();
                $id = $Conexion->lastInsertId();
                return $id;
            }
        }catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }finally{
            Conexion::getInstance()->cerrarConexion();
        }
    }

    /**
     * It deletes a row from the table eventos_imagenes and then deletes the row from the table
     * imagenes.
     * 
     * @param cve_evento is the id of the event
     * @param cve_imagenes 1
     * 
     * @return The result of the query.
     */
    function deletePortada($cve_evento,$cve_imagenes){
        try{
            $Conexion = Conexion::getInstance()->obtenerConexion();
            $this->SQL = "
                DELETE FROM eventos_imagenes 
                WHERE cve_eventos=:cve_evento AND cve_imagenes= :cve_imagenes;
                DELETE FROM imagenes 
                WHERE cve_imagenes=:cve_imagenes;";
            if ($Conexion != null) {	                
                $this->sta = $Conexion->prepare($this->SQL);
                
                $this->sta->bindValue(':cve_imagenes', $cve_imagenes, PDO::PARAM_STR);
                $this->sta->bindValue(':cve_evento', $cve_evento, PDO::PARAM_STR);
                
                return $this->sta->execute();
                
            }
        }catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }finally{
            Conexion::getInstance()->cerrarConexion();
        }
    }

}
