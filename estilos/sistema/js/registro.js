function ejecutarRegistro(e){

  Android.showToast('Formulario enviado')
    e.preventDefault();
    $.ajax({
      url:$("#cliente").attr("action"),
      type:$("#cliente").attr("method"),
      data:$("#cliente").serialize(),
      success:function(respuesta){

        if (respuesta == "Registro Guardado") {
          Android.showToast(respuesta)
          window.location=base_url;
        }else {
          Android.showToast(respuesta)
          return false;
        }
      }
    });
}




  /*function registroCliente(){
    alert("hola")
    document.formulariocliente.submit(function (event){
      event.preventDefault();
      alert("hola2")
      $.ajax({
        url:$("#cliente").attr("action"),
        type:$("#cliente").attr("method"),
        data:$("#cliente").serialize(),
        success:function(respuesta){
          alert(respuesta);
          if (respuesta == "Registro Guardado") {
            window.location=base_url;
          }
        }
      });

    });
  }*/
