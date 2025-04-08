<?php
$tempPath = $_FILES['file']['tmp_name'];
$uploadPath = dirname(__FILE__) . '\resource\img_eventos\\' . $_FILES['file']['name'];

if (move_uploaded_file($tempPath, $uploadPath)) {
    echo "Éxito";
} else {
    print_r(error_get_last());
}

?>