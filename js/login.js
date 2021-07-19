function iniciar_sesion(){
    var usuario= document.getElementById('usuario').value;
    var password= document.getElementById('password').value;
    if(usuario==""){
        Swal.fire({
            title: 'Usuario Vacío',
            text: 'Revise los campos',
            icon: 'error',
            timer: 5000
        });
        return;
    }
    if(password==""){
        Swal.fire({
            title: 'Contraseña Vacía',
            text: 'Revise los campos',
            icon: 'error',
            timer: 5000
        });
        return;
    }

    var datos = { 
        "usuario":usuario,
        "password":password
     };
    
     $.ajax({
         url: '../Controlador/loginController.php',
         data: datos,
         type: 'POST',
         dataType: 'json'
     }).done(function(data){
        if(data=="OK"){
            (async () =>{
                await Swal.fire({
                    title: 'Acceso correcto',
                    text: 'Datos Correctos',
                    icon: 'success',
                    timer: 5000
                });
                window.location='vista_Back/actualizarBanner.php';
            })()   
        }else{
            Swal.fire({
                title: 'Incorrecto',
                text: 'Revise los campos',
                icon: 'error',
                timer: 5000
            });
        }
     }).fail(function(data){
         console.log(data);
     })
}