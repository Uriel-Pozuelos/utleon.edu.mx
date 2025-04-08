<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
// Configuración robusta de sesión
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_samesite', 'Lax');

session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'domain' => $_SERVER['HTTP_HOST'],
    'secure' => false, 
    'httponly' => true,
    'samesite' => 'Lax'
]);

session_start();

require_once("../modelo/ComandoUsuarios.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $comando = new ComandoUsuarios();
    $usuario = $comando->validarUsuario($username, $password);

    if ($usuario) {
        // Regenera el ID de sesión para prevenir fixation
        session_regenerate_id(true);
        
        // Almacena solo datos necesarios
        $_SESSION['usuario'] = [
            'id' => $usuario['cve_usuario'],
            'nombre' => $usuario['nombre'],
            'username' => $usuario['username']
        ];
        
        // Depuración final
        error_log("Sesión establecida: ".print_r($_SESSION, true));
        error_log("Cookie: ".print_r(session_get_cookie_params(), true));

        header("Location: /catalogo-eventos");
        exit();
    } else {
        $_SESSION['error'] = "Credenciales incorrectas";
        header("Location: /acceder");
        exit();
    }
} else {
    header("Location: /acceder");
    exit();
}