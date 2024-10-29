<?php
session_start();
$data = json_decode(file_get_contents('php://input'), true);
$_SESSION['userData'] = $data;
echo json_encode(["status" => "success"]);
?>
