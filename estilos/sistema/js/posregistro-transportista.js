$( window ).on( "load", function() {
  $("#transportista").submit(function (event){
    event.preventDefault();
    var formData = new FormData($("#transportista")[0]);
    alert('Enviando');

    $.ajax({
      url:$("#transportista").attr("action"),
      type:$("#transportista").attr("method"),
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(respuesta){
        if (respuesta == "Registro Guardado") {
          toastr.success('Enviando Datos!', 'Espere un momento');
          setTimeout(function() {
            //your code to be executed after 1 second
            window.location=base_url+'Login/logout';
          }, 2000);
        }else if (respuesta == "error") {
          alert("error");
        }else if (respuesta == "You did not select a file to upload.") {
          alert("You did not select a file to upload.");
        }
      }
    });

  });

});
