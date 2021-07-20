<?php

    include 'db.php';

    $usname  = $_POST['usname'];
    $pass  = $_POST['pass'];

    $validad_login = mysqli_query($con, "SELECT * FROM `register` WHERE usname='$usname' and pass='$pass' " );

    if(mysqli_num_rows($validad_login) > 0 )
    {
        header("location: reservation.php");
        exit;
    }else{
        echo
        '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location="index1.php"; 
        </script>
        ';

        exit;
    }


?>