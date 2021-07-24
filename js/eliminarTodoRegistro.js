function eliminarTodo(){
    var borrar= document.getElementById('BorrarTodo').id;
    var datos = { 
        "btnBorrar":borrar
     };
    
     $.ajax({
         url: '../../Controlador/eliminarTodoController.php',
         data: datos,
         type: 'POST',
         dataType: 'json'
     }).done(function(data){
        if(data=="OK"){
            (async () =>{
                await Swal.fire({
                    title: 'Eliminados',
                    text: 'Registros eliminados correctamente',
                    icon: 'success',
                    timer: 5000
                });
                location.reload();
            })()
        }else{
            Swal.fire({
                title: 'Algo sucedio',
                text: 'No se han eliminado los registros',
                icon: 'error',
                timer: 5000
            });
        }
     }).fail(function(data){
         console.log(data);
     })
}