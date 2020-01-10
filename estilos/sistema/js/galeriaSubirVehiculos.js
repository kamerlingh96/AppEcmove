$( window ).on( "load", function() {
  $("#vehiculosSubir").submit(function (event){
    event.preventDefault();
    var formData = new FormData($("#vehiculosSubir")[0]);

    $.ajax({
      url:$("#vehiculosSubir").attr("action"),
      type:$("#vehiculosSubir").attr("method"),
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(respuesta){
        alert(respuesta);
        //if (respuesta == "Registro Guardado") {
        //}
      }
    });

  });


});
