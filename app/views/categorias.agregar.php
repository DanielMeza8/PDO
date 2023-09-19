<div class="container mt-4 bg-light py-4">
    <div class="row">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="./read" class="btn btn-outline-info">Regresar</a>
            </div>
            <h1>Crear categoria</h1>
            <div>
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>
                <div class="d-grid gap-1">
                    <button id="crear" class="btn btn-success">Crear</button>
                </div>    
            </div>
        </div>
    </div>
</div>
<?php include "./app/controller/categorias/create.controller.php" ?>