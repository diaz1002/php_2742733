<?php require('conexion.php'); ?>

<?php require('header.php'); ?>

<section>
    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./galeria/Faa-logo-tiburones.png" alt="Logo" width="50" height="40" class="d-inline-block align-text-top">
                SHARK
            </a>
        </div>
    </nav>
    <h1 style="font-size: 80px; display:flex; justify-content:center; margin: top 2px;">Cursos Intensivos</h1>

</section>


<section style="display: flex; flex-direction: row; gap: 2rem;  justify-content: center; margin-top: 2rem;" class="dr">
    <?php
    $statement = $conexion->prepare("SELECT * FROM Curso");
    $statement->execute();
    $result = $statement->fetchAll();

    foreach ($result as $item) { ?>


        <a class="no-link" href="curso.php?id=<?php echo $item['ID']?>">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="<?php echo $item['Imagen'] ?>" class="card-img-top" alt="...">
                    <h5 class="card-title"><?php echo $item['Curso'] ?> </h5>
                    <p class="card-text"> <?php echo $item['Descripción'] ?> </p>
                    <p class="card-text"><?php echo $item['Estudiantes'] ?></p>
                </div>
        </a>
        </div>
    <?php } ?>
</section>

<?php require('footer.php'); ?>