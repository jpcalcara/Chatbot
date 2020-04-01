<?php
$servername  = "localhost";
$username = "bot_testJP_test";
$password = "nosenose000";

  $conn = new mysqli($servername, $username, $password);
  if($conn->connect_error){
      die("Connection failed: ". $conn->connect_error);
  }
  echo "Connected successfully";

  $sql = "SELECT nombre, dni, mail FROM usuarios";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo "Nombre: ". $row["nombre"]. "Dni: ". $row["dni"]. "Mail: ". $row["mail"]. "<br>";
    }
  } else{
      echo "No se encontraron resultados";
  }
  $conn->close();

  ?>

  /*if(intent_recibido("register")){
    $nombre = obtener_variables()['nombre'];
    $dni = obtener_variables()['dni'];
    $mail = obtener_variables()['mail'];
    enviar_texto("Te has registrado con los siguientes datos: <br>$nombre<br>$dni<br>$mail");

    $sql = "INSERT INTO users (nombre, dni, mail) VALUES ('$nombre', $dni, $mail)";

    /*if($conn->query($sql) === TRUE){
      //echo "New record created successfully";
    } else{
      echo "Error: ". $sql. "<br>". $conn->error;
    }
    $conn->close();*/
