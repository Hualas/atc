console.log("JS working-Modulo");

$(document).ready(function() {
    console.log("JQuery Working!");

    /*=========================================================
        btnClick prueba mensaje Toastr
    ==========================================================*/
    $('#btnAlert').click(function() {
        console.log("click");
        toastr.error("Mensaje de prueba!?", "Titulo del mensaje");
        toastr.success("Mensaje de prueba!?", "Titulo del mensaje");
    });

    /*=========================================================
        btnClick prueba ventana Modal sWeetalert
    ==========================================================*/
    $('#btnModal').click(function() {
        console.log("click");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                console.log("Eliminacion confirmada");
                Swal.fire(
                    'Eliminado!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })

    });


});