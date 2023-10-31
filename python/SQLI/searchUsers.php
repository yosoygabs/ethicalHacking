<?php

  $server = "localhost";
  $username = "g4ts-blue";
  $password = "g4ts";
  $database = "g4tsPwn";

  // Conexión a la base de datos
  $conn = new mysqli($server, $username, $password, $database);

  // Sanitización de SQL
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  echo "[+] Tu valor introducido es: ". $id ."<br>-------------------------------------->

  $data = mysqli_query($conn, "select username from users where id =$id");

  $response = mysqli_fetch_array($data);

  if (!isset($response['username'])){
    http-response_code(404);
  }
?>