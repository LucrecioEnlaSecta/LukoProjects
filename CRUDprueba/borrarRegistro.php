<?php 
    include('conexion.php');
    
    $id=$_GET['id'];

    $base->query("DELETE FROM usuarios where iduser='$id'");

    header('location:index.php');
?>