<!-- ESTA CLASE HACE QUE SE VALIDE EL LOGIN
 -->
<?php
if (!empty($_POST["btnIngresar"])) {
   if (empty($_POST["usuario"]) and empty($_POST["password"])) {
      echo '<div class="alertError">Faltó Usuario/Contraseña</div>';
   } else {
      $usuario = $_POST["usuario"];
      $password = $_POST["password"];
      /*HACEMOS CONSULTA A LA BASE DE DATOS, para verificar el usuario*/
      $sql = $conexion->query("SELECT * FROM socio where usuario='$usuario' and password='$password' ");
      /* SI EXISTEN LOS DATOS DEL DEL USUARIO
 */
      if ($datos = $sql->fetch_object()) {
         header("location:./views/add_camion_view.php");
      } else {
         echo '<div class="alertError">Acceso Denegado</div>';
      }
   }
}


?>