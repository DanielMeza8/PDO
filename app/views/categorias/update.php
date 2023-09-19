<div class="container mt-4 bg-light py-4">
    <div class="row">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="./read" class="btn btn-outline-info">Regresar</a>
            </div>
            <h1>Actualizar categoria</h1>
            <div>
            <div class="mb-3">
                    <input type="text" class="form-control" name="id" id="id" value="<?php echo $categorias['id']?>" hidden>
                </div>
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $categorias['nombre']?>">
                </div>
                <div class="mb-3">
                    <label for="">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $categorias['descripcion']?>">
                </div>
                <div class="d-grid gap-1">
                    <button id="actualizar" class="btn btn-warning">Actualizar</button>
                </div>    
            </div>
        </div>
    </div>
</div>
<?php include "./app/controller/categorias/update.controller.php" ?>