
<div class="container mt-5 bg-light py-4">
    <div class="row">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="./home" class="btn btn-outline-info">Regresar</a>
            </div>
            <h1>Lista de Contactos</h1>
            <hr>
            <table class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm mt-3">
                <thead>
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Categoria</th>
                        <th class="text-center">Actualizar</th>
                        <th class="text-center">Eliminar</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php   
                        foreach ($contactos as $contacto):
                    ?>
                    <tr>
                        <td><?php  echo $contacto["nombre"] ?></td>
                        <td><?php  echo $contacto["telefono"] ?></td>
                        <td><?php  echo $contacto["email"] ?></td>
                        <td><?php  echo $contacto["categoriaContacto"] ?></td>
                        <td class="text-center"><a href="./update&id=<?php echo $contacto["idContacto"] ?>" class="btn btn-warning">Actualizar</a></td>
                        <td class="text-center"><button class="btn btn-danger deleteButton" data-id="<?php echo $contacto["idContacto"] ?>">Eliminar</button></td>
                    </tr>
                    <?php  
                        endforeach;
                    ?>
                </tbody>
            </table>
            <div class="d-grid gap-2">
                <a href="./create" class="btn btn-success ">Agregar nuevo contacto</a>
                <a href="./readCategorias" class="btn btn-info">Categorias</a>
            </div>
        </div>
    </div>
</div>
<?php  require "./app/controller/delete.controller.php" ?>