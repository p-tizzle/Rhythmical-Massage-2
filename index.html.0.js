
      $(document).ready(function () {
        $(".hiddenDiv").click(function(){
          $(".hidden").hide();
          $(this).next().fadeToggle("slow");
        });
    });
    
