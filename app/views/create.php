<div class="container mt-4 bg-light py-4">
    <div class="row">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="./read" class="btn btn-outline-info">Regresar</a>
            </div>
            <h1>Crear contacto</h1>
            <div>
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email"  class="form-control" name="email" id="email">
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
                    <button id="crear" class="btn btn-success">Crear</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./app/controller/create.controller.php"  ?>