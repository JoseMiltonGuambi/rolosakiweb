<?php
if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $provincia=$_POST["provincia"];
    $message = $_POST["message"];

    $to = "joserecargaki@gmail.com";
    $subject = "Pedido de cotação por".$name;
    $headers = "Email:".$email;
    $prov="Provincia:".$provincia;
    $mail="Descrição:.\n".$message;

    mail($to,$subject,$headers,$headers,$prov,$mail);

    header("Location:index.html?Cotação enviada");


}



?>





