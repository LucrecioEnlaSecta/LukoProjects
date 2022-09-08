<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>
<?php 
  if(!isset($_POST['bot_actualizar'])){

  
  include('conexion.php');
    $id=$_GET['id'];
    $nombre=$_GET['nom'];
    $apellido=$_GET['apellido'];
    $usuario=$_GET['usuario'];
  }else {
    include('conexion.php');
    $id=$_POST['id'];
    $nombre=$_POST['nom'];
    $apellido=$_POST['apellido'];
    $usuario=$_POST['usuario'];
    $sql="UPDATE usuarios SET nombre=:minombre, apellido=:miapellido, usuario=:miusuario where iduser=:miid";
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":miid"=>$id,":minombre"=>$nombre,":miapellido"=>$apellido,":miusuario"=>$usuario));

    header("location:index.php");
  }
?>
<h1>ACTUALIZAR</h1>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nombre?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="apellido"></label>
      <input type="text" name="apellido" id="apellido" value="<?php echo $apellido?>"></td>
    </tr>
    <tr>
      <td>Usuario</td>
      <td><label for="usuario"></label>
      <input type="text" name="usuario" id="usuario" value="<?php echo $usuario?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>