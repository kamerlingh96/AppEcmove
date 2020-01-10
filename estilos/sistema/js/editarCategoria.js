$( window ).on( "load", function() {
  $("#editarCategoria").submit(function (event){
    event.preventDefault();

    $.ajax({
      url:$("#editarCategoria").attr("action"),
      type:$("#editarCategoria").attr("method"),
      data:$("#editarCategoria").serialize(),
      success:function(respuesta){
        alert(respuesta);
        if (respuesta == "Categoria Editada Exitosamente") {
          window.location=base_url+'Servicios';
        }
      }
    });

  });
});
