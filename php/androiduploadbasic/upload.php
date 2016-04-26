<?php
$file_path = "uploads/";

$filename = $_FILES['uploaded_file']['name'];
$file_basename = substr($filename, 0, strripos($filename, '.'));
$file_ext = strtolower(substr($filename, strripos($filename, '.')));

$filenameNew = $file_path . $file_basename . '-' . date('Y-m-d-H-i-s') . $file_ext;
if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $filenameNew)) {
    http_response_code(200);
} else {
    http_response_code(400);
}