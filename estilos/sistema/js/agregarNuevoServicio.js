$( window ).on( "load", function() {
  $("#agregarServicio").submit(function (event){
    event.preventDefault();

    $.ajax({
      url:$("#agregarServicio").attr("action"),
      type:$("#agregarServicio").attr("method"),
      data:$("#agregarServicio").serialize(),
      success:function(respuesta){
        alert(respuesta);
        if (respuesta == "Servicio Agregado Exitosamente") {
          //window.location=base_url;
        }
      }
    });

  });
});
