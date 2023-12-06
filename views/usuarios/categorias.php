<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
    <div class="row">
        <div class="col-sm-4">
<a class="catelectronico" href="productosCategoria.php?categoria=<?php echo 'Bebidas'?>">
bebidas
</a>
        </div>
<div class="col-sm-4">
<a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'Alimentos'?>">
Alimentos
</a>
</div>  
<div class="col-sm-4">
<a class="catfarmaceutico" href="productosCategoria.php?categoria=<?php echo 'postres'?>">
Postres
</a>
</div>  
</div>

</div>
<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Categorias de Sazon Huasteca">
    </div>
</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>