
function ejecutarPosRegistro(e){

  e.preventDefault();
  //alert
  Android.showToast('Enviando...')
  var formData = new FormData($("#transportista")[0]);
    $.ajax({
      url:$("#transportista").attr("action"),
      type:$("#transportista").attr("method"),
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(respuesta){

        if (respuesta == "Registro Guardado") {
          Android.showToast('Registro Guardado')
          setTimeout(function() {
            //your code to be executed after 1 second
            window.location=base_url+'Login/logout';
          }, 1500);
        }else if (respuesta == "error") {
          Android.showToast("error");
        }else if (respuesta == "You did not select a file to upload.") {
          Android.showToast("You did not select a file to upload.");
        }
      }
    });
}
