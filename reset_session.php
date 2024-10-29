<?php
session_start();
unset($_SESSION['userData']);
echo json_encode(["status" => "reset"]);
?>
