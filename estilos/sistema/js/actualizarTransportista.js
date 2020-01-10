$( window ).on( "load", function() {
  $("#transportistas").submit(function (event){
    event.preventDefault();

    $.ajax({
      url:$("#transportistas").attr("action"),
      type:$("#transportistas").attr("method"),
      data:$("#transportistas").serialize(),
      success:function(respuesta){
        toastr.success('Enviando Datos.', 'Espere un momento!', { "showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 1700 });
        setTimeout(function() {
          if (respuesta == "Datos Actualizados") {
            toastr.success('Datos Actualizados!', 'Listo');
            setTimeout(function() {
                window.location=base_url+'MisTransportistas/perfil/'+id_user;
            }, 1500);
          }
        }, 2300);
      }
    });

  });
});
