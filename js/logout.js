function cerrar_sesion(){
    var cerrar= document.getElementById('CerrarSesion').id;
    var datos = { 
        "btnCerrar":cerrar
     };
    
     $.ajax({
         url: '../../Controlador/logoutController.php',
         data: datos,
         type: 'POST',
         dataType: 'json'
     }).done(function(data){
        if(data=="OK"){
            (async () =>{
                await Swal.fire({
                    title: '<span style="font-size:4rem;">Hasta luego!</span>',
                    text: 'Sesión cerrada correctamente',
                    icon: 'success',
                    timer: 5000,
                });
                window.location='../login.html';
            })()
            
        }else{
            Swal.fire({
                title: 'Algo sucedio',
                text: 'No se ha cerrado sesión',
                icon: 'error',
                timer: 5000
            });
        }
     }).fail(function(data){
         console.log(data);
     })
}