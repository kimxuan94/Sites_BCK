
    $('#maps').gmap3({
 map: {
    options: {
      maxZoom: 14 
    }  
 },
 marker:{
    /*address: "Haltern am See, Weseler Str. 151",*/
    address:"168 Rue Saint-Charles 75015 Paris",
    options: {
     draggable:true,
     icon: new google.maps.MarkerImage(
       "http://maps.google.com/mapfiles/marker_orange.png",
       new google.maps.Size(32, 37, "px", "px")
     )
    }
 }
},
"autofit" );
});
