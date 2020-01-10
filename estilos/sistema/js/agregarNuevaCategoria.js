$( window ).on( "load", function() {
  $("#agregarCategoria").submit(function (event){
    event.preventDefault();

    $.ajax({
      url:$("#agregarCategoria").attr("action"),
      type:$("#agregarCategoria").attr("method"),
      data:$("#agregarCategoria").serialize(),
      success:function(respuesta){
        alert(respuesta);
        if (respuesta == "Categoria Agregada Exitosamente") {
          window.location=base_url+'Servicios';
        }
      }
    });

  });
});
