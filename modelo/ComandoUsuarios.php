<?php

require_once(__DIR__ . "/../conexion/Conexion.class.php");
    
class ComandoUsuarios {
    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::getInstance()->obtenerConexion();
    }

    public function validarUsuario($username, $password) {
        try {
            
            $sql = "SELECT * FROM usuarios WHERE username = :username AND password = :password AND activo = 1";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error PDO: " . $e->getMessage());
            return false;
        }
    }
}
    
    
?>