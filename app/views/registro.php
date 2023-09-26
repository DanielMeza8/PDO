<div class="container mt-4 text-center mt-5 bg-light py-4">
        <div class="row">
            <div class="col">
                <div class="card mb-3" style="max-width: 1100px;">
                    <div class="row g-0">
                        <div class="col-md-4 text-center py-4">
                        <img src="./public/img/login.webp" class="img-fluid rounded mx-auto d-block" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-center">Registro de Usuario</h5>
                                <form action="./app/model/proccess/registro.proccess.php" method="POST">
                                    <div class="input-group flex-nowrap py-3">
                                        <span class="input-group-text" id="addon-wrapping">@</span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email">
                                    </div>   
                                    
                                    <div class="input-group flex-nowrap py-3">
                                        <span class="input-group-text" id="addon-wrapping">PASS</span>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña">
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                        <a href="./login" class="btn btn-success">Logear</a>
                                    </div>
                                </form>
                            </div>
                        </div>         
                    </div>
                </div>
            </div>
        </div>
    </div>
    