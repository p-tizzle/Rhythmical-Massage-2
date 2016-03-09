
    
 /**************************************
      SERVICES HIDDEN DIV DROPDOWN
 **************************************/



       $(document).ready(function () {
        $(".hiddenDiv").click(function(){
          $(this).next().fadeToggle("slow");
          $(this).siblings(".hiddenDiv").next().hide()
        });
    });
    
    
    
    
 /**************************************
          IMAGE SLIDER
 **************************************/

  $('.carousel').carousel({
   interval: 2800
  });
  
  
  
 /**************************************
          GOOGLE MAP
 **************************************/

 function initMap() {
        var myLatLng = {lat: 38.285612, lng: -85.627257}
           
        var mymap = new google.maps.Map(document.getElementById('mymap'), {
          zoom: 16,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: mymap,
          icon: src="images/pushpin.png",
          title: 'Massage/RMT',
          
        });
      }
    

 
    
