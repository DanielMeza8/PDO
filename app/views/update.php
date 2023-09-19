
<?php
    $crud = new Crud();
    $categorias = $crud->readCategorias();
?>
<div class="container mt-4 bg-light py-4">
    <div class="row">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="./read" class="btn btn-outline-info">Regresar</a>
            </div>
            <h1>Actualizar contacto</h1>
            <div>
                <div class="mb-3">
                    <input type="hidden" id="id" value="<?php echo $contacto['id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre a actualizar" value="<?php echo $contacto['nombre'] ?>">
                </div>
                <div class="mb-3">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingresa el telefono a actualizar" value="<?php echo $contacto['telefono'] ?>">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email"  class="form-control" name="email" id="email" placeholder="Ingresa el correo a actualizar" aria-describedby="nombreHelp" value="<?php echo $contacto['email'] ?>">
                </div>
                <div class="mb-3">
                    <label for="">Categoria</label>
                    <select class="form-select" id="categoria">
                        <?php 
                            foreach ($categorias as $categoria):
                                echo '<option value="'.$categoria["id"].'">'.$categoria["nombre"].'</option>';
                            endforeach;
                        ?>
                    </select>
                </div>
                <div class="d-grid gap-1">
                    <button id="updatee" class="btn btn-warning">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  require "./app/controller/update.controller.php" ?>