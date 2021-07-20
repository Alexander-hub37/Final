<?php

  include 'db.php';

  
  $usname  = $_POST['usname'];
  $pass  = $_POST['pass'];

  $query = "INSERT INTO `register`(usname,pass)
            VALUES('$usname','$pass')";

//Verificar que el correo no se repita en l bd

  $verificar_us = mysqli_query($con, "SELECT * FROM `register` WHERE usname='$usname' ");

  if(mysqli_num_rows($verificar_us) > 0)
  {
    echo 
    '
    <script>
    alert("Este usuario ya esta registrado, intenta con otro diferente");
    window.location = "index1.php";
    </script>
    ';
    exit();


  }



  $ejecutar = mysqli_query($con,$query);

  if($ejecutar)
  {
    echo '
    <script>
    alert("Usuario almacenado exitosamente");
    window.location = "index1.php";
    </script>

    ';
  }

  mysqli_close($con); 

?>
