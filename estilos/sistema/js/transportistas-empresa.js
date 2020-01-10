$( window ).on( "load", function() {
  $("#empresa").submit(function (event){
    event.preventDefault();
    var formData = new FormData($("#empresa")[0]);
    $.ajax({
      url:$("#empresa").attr("action"),
      type:$("#empresa").attr("method"),
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(respuesta){
        if (respuesta == "Registro completado") {
          alert("Registro completado");
          setTimeout(function() {
            //your code to be executed after 1 second
            window.location=base_url;
          }, 2000);
        }else if (respuesta == "correo ya registrado") {
          alert("Correo ya registrado");
        }
      }
    });

  });

});
