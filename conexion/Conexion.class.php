<?php
class Conexion {
    private static $instancia = null;
    private $conexion;

    private function __construct() {
        // Cargar archivo config
        $config = require __DIR__ . '/../config.php';

        try {
            $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['db']};charset=utf8";
            $this->conexion = new PDO($dsn, $config['user'], $config['pass']);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instancia === null) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function obtenerConexion() {
        return $this->conexion;
    }

    public function cerrarConexion() {
        $this->conexion = null;
        self::$instancia = null;
    }

    private function __clone() {}
}

?>