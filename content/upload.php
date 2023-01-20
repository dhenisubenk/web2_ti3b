<?php
$file_name = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'];
$file_size = $_FILES['gambar']['size'];
$file_type = $_FILES['gambar']['type'];

$allowedType = ['jpg', 'png', 'jpeg'];
$type = pathinfo($file_name, PATHINFO_EXTENSION);

if (in_array($type, $allowedType)) {
    if ($file_size > 1000000) {
        echo "File tidak boleh lebiih dari 1MB";
    } else {
        if (move_uploaded_file($file_tmp, "img/" . $file_name)) {
            echo "File berhasil di upload";
        } else {
            echo "File gagal di upload";
        }
    }
} else {
    echo "File tidak support";
}
