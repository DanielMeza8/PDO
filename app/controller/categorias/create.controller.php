<script>
    $(document).ready(() =>{
        $("#crear").click(() => {
            let nombre = $("#nombre").val();
            let descripcion = $("#descripcion").val();

            // TAREA VALIDACIONES DE nombre, email, telefono MOSTRAR ALERTA CON sweetalert
            if (!nombre || !descripcion) {
                Swal.fire(
                    '¿Un campo vacío?',
                    'por favor, revisa todos los campos.',
                    'question'
                )
                return; // Detener la ejecución si hay campos vacíos
            }
            
            $.ajax({
                url: "./app/model/proccess/categorias/create.process.php",
                data: {
                    nombre,
                    descripcion
                },
                type: "POST",
                success: () => {
                    Swal.fire({
                        position: 'top',
                        icon: 'success',
                        title: 'Tu trabajo ha sigo guardado.',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                    }).then ((result) => {
                        window.location = "./readCategorias"
                    })
                },
                error: () => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salió mal!'
                    })         
                }
            })
        })
    })
</script>