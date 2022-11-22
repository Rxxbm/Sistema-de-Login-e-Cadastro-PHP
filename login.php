<?php
    print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        include_once('index.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $resultado = $connect->query($sql);

        if(mysqli_num_rows($resultado) < 1){
            header("Location: cadastro.php");
            print_r($resultado);
        }else{
            header('Location: sistema.php');
            print_r($resultado);
        }
    }

?>