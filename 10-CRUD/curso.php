<?php require('conexion.php')?>

<?php 
if(isset ($_GET['id'])){
    $id = $_GET['id'];
   
    $statement = $conexion->prepare("SELECT * FROM Curso WHERE id = '$id' ");
    $statement->execute();

    $result=$statement->fetch();

}else{
    header('location:LandingPage.php');
}
?>

<?php require('header.php')?>

    <h3 style="font-size: 80px; display:flex; justify-content:center; margin: top 2px;"><?php echo $result['Curso'] ?></h3>
    <div  class="fotocurso">
        <img src=<?php echo $result['Imagen'] ?> class="img-fluid" alt="...">
    </div>
    <p style="font-size: 20px; display:flex; justify-content:center; margin: auto;" class="text-center"><?php echo $result['Descripción'] ?></p>
    <p style="font-size: 20px; display:flex; justify-content:center; margin: auto;" class="text-center"><?php echo $result['Estudiantes'] ?></p>
    <button class="btn btn-success">Inscribete</button>




<?php require('footer.php')?>
