$( window ).on( "load", function() {
  $("#empresasSubir").submit(function (event){
    event.preventDefault();
    var formData = new FormData($("#empresasSubir")[0]);

    $.ajax({
      url:$("#empresasSubir").attr("action"),
      type:$("#empresasSubir").attr("method"),
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
