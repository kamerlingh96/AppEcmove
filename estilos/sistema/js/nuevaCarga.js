var marker,markerFin;          //variable del marcador
var coords = {}, coordsFin = {};    //coordenadas obtenidas con la geolocalización

//Funcion principal
initMap = function (){
  setMapa(coords);
  setMapaFin(coords);
}


function setMapa (coords){
  //Se crea una nueva instancia del objeto mapa
  var geocoder = new google.maps.Geocoder();
  var map = new google.maps.Map(document.getElementById('map_inicio'),
  {
    zoom: 13,
    center:new google.maps.LatLng(18.6472724,-91.8103048),

  });

  //Creamos el marcador en el mapa con sus propiedades
  //para nuestro obetivo tenemos que poner el atributo draggable en true
  //position pondremos las mismas coordenas que obtuvimos en la geolocalización
  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: new google.maps.LatLng(18.6472724,-91.8103048),

  });
  //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica
  //cuando el usuario a soltado el marcador

  marker.addListener( 'dragend', function (event)
  {

    document.getElementById("coordsInicio").value = this.getPosition().lat()+","+ this.getPosition().lng();
    geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
         var address=results[0]['formatted_address'];
         //alert(address);
        //alert(getAddressComponent(results,"political"));
        document.getElementById('direccionInicio').innerHTML=address;
        document.getElementById("estadoInicio").value = getAddressComponent(results,"administrative_area_level_1");
        document.getElementById("municipioInicio").value = getAddressComponent(results,"locality");
        document.getElementById("calleInicio").value = getAddressComponent(results,"route");
        document.getElementById("coloniaInicio").value = getAddressComponent(results,"political");
        document.getElementById("numExtInicio").value = getAddressComponent(results,"street_number");
        document.getElementById("numIntInicio").value = "";
        document.getElementById("cpInicio").value = getAddressComponent(results,"postal_code");
       }
     });
    //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
    //Android.showToast(this.getPosition().lat()+","+ this.getPosition().lng())
    //document.getElementById("coords_inicio").value = this.getPosition().lat()+","+ this.getPosition().lng();
  });
}

function setMapaFin (coordsFin)
{
      //Se crea una nueva instancia del objeto mapa
      var geocoder2 = new google.maps.Geocoder();
      var map2 = new google.maps.Map(document.getElementById('map_fin'),
      {
        zoom: 13,
        center:new google.maps.LatLng(18.6472724,-91.8103048),

      });

      //Creamos el marcador en el mapa con sus propiedades
      //para nuestro obetivo tenemos que poner el atributo draggable en true
      //position pondremos las mismas coordenas que obtuvimos en la geolocalización
      marker2 = new google.maps.Marker({
        map: map2,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(18.6472724,-91.8103048),

      });
      //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica
      //cuando el usuario a soltado el marcador

      marker2.addListener( 'dragend', function (event)
      {
        document.getElementById("coordsFin").value = this.getPosition().lat()+","+ this.getPosition().lng();

        geocoder2.geocode({'latLng': marker2.getPosition()}, function(results, status) {
           if (status == google.maps.GeocoderStatus.OK) {
             var address=results[0]['formatted_address'];
             //alert(address);
            //alert(getAddressComponent(results,"political"));
            document.getElementById('direccionFin').innerHTML=address;
            document.getElementById("estadoFin").value = getAddressComponent(results,"administrative_area_level_1");
            document.getElementById("municipioFin").value = getAddressComponent(results,"locality");
            document.getElementById("calleFin").value = getAddressComponent(results,"route");
            document.getElementById("coloniaFin").value = getAddressComponent(results,"political");
            document.getElementById("numExtFin").value = getAddressComponent(results,"street_number");
            document.getElementById("numIntFin").value = "";
            document.getElementById("cpFin").value = getAddressComponent(results,"postal_code");
            //calculateAndDisplayRoute();

           }
         });
        //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
        //Android.showToast(this.getPosition().lat()+","+ this.getPosition().lng())
        //document.getElementById("coords_fin").value = this.getPosition().lat()+","+ this.getPosition().lng();


      });


}

//callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

function getAddressComponent(address,component){
  var components = address[0]['address_components'];

  for (var i in components){
    if(components[i]['types'].indexOf(component)>-1){
      return components[i]['long_name'];
    }
  }
  return false;
}


function mapadistancia(){
  var directionsService = new google.maps.DirectionsService();
  var location_ini = document.getElementById("coordsInicio").value;
  var location_fin = document.getElementById("coordsFin").value;

  console.log(location_ini);
console.log(location_fin);
  var request = {
    origin: location_ini,
    destination: location_fin,
    travelMode: 'DRIVING'
  };
  directionsService.route(request, function(result, status) {
    if (status == 'OK') {
      document.getElementById("distanciaMetros").value = result.routes[0].legs[0].distance.value;
    }
  });
}
