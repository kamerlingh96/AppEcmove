$( window ).on( "load", function() {
  $("#agregarVehiculo").submit(function (event){
    event.preventDefault();

    $.ajax({
      url:$("#agregarVehiculo").attr("action"),
      type:$("#agregarVehiculo").attr("method"),
      data:$("#agregarVehiculo").serialize(),
      success:function(respuesta){
        alert(respuesta);
        if (respuesta == "Vehiculo Agregado Exitosamente") {
          window.location=base_url+'Vehiculos';
        }
      }
    });

  });
});
