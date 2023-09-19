
<div class="container mt-5 bg-light py-4">
    <div class="row">
        <div class="col">            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="./read" class="btn btn-outline-info">Regresar</a>
            </div>
            <h1>Categorias</h1>
            <table class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm mt-3">
                <thead>
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Descripcion</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Eliminar</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php   
                        foreach ($categorias as $categoria):
                    ?>
                    <tr>
                        <td><?php echo $categoria["nombre"] ?></td>
                        <td><?php echo $categoria["descripcion"] ?></td>
                        <td class="text-center"><a href="categoriasActualizar&id=<?php echo $categoria["id"] ?>" class="btn btn-warning">Actualizar</a></td>
                        <td class="text-center"><button class="btn btn-danger deleteButton" data-id="<?php echo $categoria["id"] ?>">Eliminar</button></td>
                    </tr> 
                    <?php  
                        endforeach;
                    ?>
                </tbody>
            </table>
            <div class="d-grid gap-1"> 
                <a href="./categoriasAgregar" class="btn btn-info">Agregar categoria</a>
            </div>
        </div>
    </div>
</div>
<?php  require "./app/controller/categorias/delete.controller.php" ?>