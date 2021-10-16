<?php
 

 
 
 
 $conn=new mysqli('localhost','root','','bd_comentario');

 if($conn->connect_errno){
     echo("La conexion ha fallado".$conn->connect_errno);
 } 

 $nombre = $_POST["nombre"];
 $email = $_POST["email"];
 $comentario = $_POST["comentario"];

 $sql="INSERT INTO `comentarios`(`Nombre`, `Email`, `Comentario`) VALUES ('$nombre','$email','$comentario')";
 $ejecutar=mysqli_query($conn,$sql);

if($ejecutar){
    
    echo"<script>alert('Comentario enviado');window.location='../index.html'</script>";

   }/*else{
    echo"Hubo Algun Error";
    printf("Erromessage: %s\n",mysqli_error($conn));
   }*/
 
 
 
?>