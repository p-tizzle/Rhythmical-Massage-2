
    
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
