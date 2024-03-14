/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */

/* DROPDOWN MENU */
$(function() {
    $("#item").click(function() {
        $("#submenu").slideToggle(50);
    });


    $(document).on("click", function(event){

        var $trigger = $("#item");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $("#submenu").slideUp("fast");
        }       
    });

}); 



/* THIS IS STICKY NAVIGATION */
$(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
      
         $("#navbar").css("background", "black");
        
        } else {
      
         $("#navbar").css("background", "rgba(0, 0, 0, 0.5)");
       
        }
    });//win func.
  });//ready func.