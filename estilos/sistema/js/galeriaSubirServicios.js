$( window ).on( "load", function() {
  $("#serviciosSubir").submit(function (event){
    event.preventDefault();
    var formData = new FormData($("#serviciosSubir")[0]);

    $.ajax({
      url:$("#serviciosSubir").attr("action"),
      type:$("#serviciosSubir").attr("method"),
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
