<!-- ESTA CLASE ES PARA BORRAR CAMIONES -->

<?php include("./conexionBD.php");

if(isset($_GET['id_camion'])){
    $id = $_GET['id_camion'];
    $query="DELETE FROM camion WHERE id_camion = $id";
    $result = mysqli_query($conexion,$query);
    if(!$result){
        die("Query Failed");
    }

    $_SESSION['message']='Camion Eliminado';
    $_SESSION['message_type']='danger';
    header("Location: ./views/add_camion_view.php"); 

}


?>
