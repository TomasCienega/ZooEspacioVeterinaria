function eliminar_noticia(id){
    var datos = { 
        "id":id
     };
    
     $.ajax({
         url: '../../Controlador/eliminarNoticiaController.php',
         data: datos,
         type: 'POST',
         dataType: 'json'
     }).done(function(data){
        if(data=="OK"){
            (async () =>{
                await Swal.fire({
                    title: 'Eliminado',
                    text: 'Tarjeta eliminada correctamente',
                    icon: 'success',
                    timer: 5000
                });
                location.reload();
            })()
            
        }else{
            alert(data)
        }
     }).fail(function(data){
         console.log(data);
     })
}