<?php

session_start();

require_once '../conexion/Conexion.class.php';
require_once '../modelo/ComandoEventos.php';


$obj= new ComandoEventos();


$accion= clear_input($_REQUEST['accion'] ?? 0);

$cve_evento= clear_input($_POST['cve_evento'] ?? 0);
$cve_imagenes= clear_input($_POST['cve_imagenes'] ?? 0);
$titulo= clear_input($_POST['titulo'] ?? 0);
$informacion= clear_input($_POST['informacion'] ?? 0);
$lugar= clear_input($_POST['lugar'] ?? 0);
$fecha= clear_input($_POST['fecha'] ?? 0);
$fecha_fin= clear_input($_POST['fecha_fin'] ?? 0);
$hora_inicio= clear_input($_POST['hora_inicio'] ?? 0);
$hora_fin= clear_input($_POST['hora_fin'] ?? 0);
$activo= clear_input($_POST['activo'] ?? 0); 
$destacado= clear_input($_POST['destacado'] ?? 0); 
$portada= clear_input($_POST['portada'] ?? 0);

// $id_usuario= $_SESSION["id"] ?? 0;

try {

    switch ($accion) {
        case 1: 
            try {
                $eventos = $obj->getTabla();
                
                // Verifica y limpia los datos
                if (!is_array($eventos)) {
                    $eventos = [];
                }
                
                // Limpia el buffer de salida por si hay warnings
                if (ob_get_length()) ob_clean();
                
                header('Content-Type: application/json');
                echo json_encode($eventos);
                exit();
            } catch (Exception $e) {
                error_log("Error en case 1: " . $e->getMessage());
                header('Content-Type: application/json');
                echo json_encode([]);
                exit();
            }
            break;
            case 2: //INSERTAR
                $datos= (object) array(
                    "titulo"=>$titulo,
                    "fecha"=>$fecha,
                    "fecha_fin"=>$fecha_fin,
                    "hora_inicio"=>$hora_inicio,
                    "hora_fin"=>$hora_fin,
                    "lugar"=>$lugar,
                    "informacion"=>$informacion,
                    "cve_usuario"=>$_SESSION["usuario"]["id"]
                );
                    echo json_encode($obj->insertEvento($datos));
                    exit(0);
                    
                break;
    
        case 3: // ACTUALIZAR
            $datos= (object) array(
                "cve_evento"=>$cve_evento,
                "titulo"=>$titulo,
                "fecha"=>$fecha,
                "fecha_fin"=>$fecha_fin,
                "hora_inicio"=>$hora_inicio,
                "hora_fin"=>$hora_fin,
                "lugar"=>$lugar,
                "informacion"=>$informacion,
                "cve_usuario"=>$_SESSION["usuario"]["id"]
            );
                echo json_encode($obj->updateEvento($datos));
                exit(0);
            break;
            case 4:
                echo json_encode($obj->eliminarEvento($cve_evento));
                exit(0);
            break;
            case 5:
                    $datos= (object) array(
                        "activo"=>$activo,
                        "cve_evento"=>$cve_evento,
                    );
                    echo json_encode($obj->publicarEvento($datos));
                    exit(0);
                break;
            case 6:
                echo json_encode($obj->getImagenes($cve_evento));
                exit(0);
                break;
            case 7: // SUBIR IMAGEN
                header('Content-Type: application/json');
                
                try {
                    
                    if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== UPLOAD_ERR_OK) {
                        throw new Exception("No se recibió el archivo correctamente");
                    }
            
                    
                    $cve_evento = !empty($_POST['cve_evento']) ? (int)$_POST['cve_evento'] : $obj->obtenerUltimoEventoId();

                    if ($cve_evento <= 0) {
                        throw new Exception("No se pudo obtener el ID del evento");
                    }
            
                    
                    $uploadDir = realpath(__DIR__ . '\..\resource\img_eventos') . '\\';
                    $extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
                    $filename = $cve_evento . '_' . uniqid() . '.' . $extension;
                    $targetPath = $uploadDir . $filename;

                    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
                    if (!in_array(strtolower($extension), $allowedTypes)) {
                        throw new Exception("Tipo de archivo no permitido. Solo se aceptan JPG, PNG o GIF");
                    }
            
                    
                    if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $targetPath)) {
                        throw new Exception("Error al mover el archivo: " . print_r(error_get_last(), true));
                    }

                    $esPortada = ($obj->getImagenes($cve_evento) === []) ? 1 : 0;
            
                    
                    $imagenData = [
                        'nombre' => $filename,
                        'ruta' => 'img_eventos/' . $filename, // Guarda ruta relativa
                        'portada' => 0
                    ];
                    
                    $idImagen = $obj->insertarImagen((object)$imagenData);
                    $obj->insertarImagenEvento($cve_evento, $idImagen);
            
                    
                    echo json_encode([
                        'success' => true,
                        'id' => $idImagen,
                        'path' => 'img_eventos/' . $filename,
                        'portada' => $esPortada,
                        'cve_evento' => $cve_evento,
                    ]);
            
                } catch (Exception $e) {
                    http_response_code(500);
                    echo json_encode([
                        'success' => false,
                        'error' => $e->getMessage()
                    ]);
                }
                exit;
            
            case 8:
                echo json_encode($obj->updatePortada($cve_imagenes,$portada,$cve_evento));
                exit(0);
                break;
            case 9:
                echo json_encode($obj->deletePortada($cve_evento,$cve_imagenes));
                exit(0);
                break;
            case 10:
                
                $datos= (object) array(
                    "destacado"=>$destacado,
                    "cve_evento"=>$cve_evento,
                );
                echo json_encode($obj->eventoDestacado($datos));
                exit(0);
                break;
            case 11: // Obtener eventos para carrusel
                header('Content-Type: application/json');
                try {
                    $con = Conexion::getInstance()->obtenerConexion();
                    $sql = "SELECT e.*, i.url as imagen_portada  
                            FROM eventos e 
                            LEFT JOIN (
                                SELECT ei.cve_eventos, i.url 
                                FROM eventos_imagenes ei
                                JOIN imagenes i ON i.cve_imagenes = ei.cve_imagenes AND i.portada = 1
                            ) i ON e.cve_eventos = i.cve_eventos
                            WHERE e.activo = 1
                            ORDER BY e.fecha DESC
                            LIMIT 5";
                    
                    $stmt = $con->prepare($sql);
                    $stmt->execute();
                    $eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    echo json_encode($eventos);
                } catch (Exception $e) {
                    error_log("Error en case obtener imagenes para carrusel: " . $e->getMessage());
                    echo json_encode([]);
                }
                break;
        default:
            echo json_encode(0);
            break;
    }
} catch (Exception $e) {
    // Manejo de errores
    error_log("Error en controlador_eventos: " . $e->getMessage());
    echo json_encode(['error' => 'Error en el servidor']);
    exit(0);
}

// Funcion para limpiar cualquier caracter extraño, espacios en blanco
function clear_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// case 7: // SUBIR IMAGEN
//     header('Content-Type: application/json');
    
//     try {
        
//         if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== UPLOAD_ERR_OK) {
//             throw new Exception("No se recibió el archivo correctamente");
//         }

        
//         $cve_evento = $obj->obtenerUltimoEventoId();
//         if ($cve_evento <= 0) {
//             throw new Exception("No hay eventos existentes para asociar la imagen");
//         }

        
//         $uploadDir = realpath(__DIR__ . '\..\resource\img_eventos') . '\\';
//         $extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
//         $filename = $cve_evento . '_' . uniqid() . '.' . $extension;
//         $targetPath = $uploadDir . $filename;

        
//         if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $targetPath)) {
//             throw new Exception("Error al mover el archivo: " . print_r(error_get_last(), true));
//         }

        
//         $imagenData = [
//             'nombre' => $filename,
//             'ruta' => 'img_eventos/' . $filename, // Guarda ruta relativa
//             'portada' => 0
//         ];
        
//         $idImagen = $obj->insertarImagen((object)$imagenData);
//         $obj->insertarImagenEvento($cve_evento, $idImagen);

        
//         echo json_encode([
//             'success' => true,
//             'id' => $idImagen,
//             'path' => 'img_eventos/' . $filename
//         ]);

//     } catch (Exception $e) {
//         http_response_code(500);
//         echo json_encode([
//             'success' => false,
//             'error' => $e->getMessage()
//         ]);
//     }
//     exit;