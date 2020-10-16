

function resize() {
    if ( $(window).width() < 739) {     
    $(".gallery-wrap a").click(function(event){
    var pop_img= $(this).attr('href');
    $("body").append('<div class="pop_img_wrap"><div class="pop_img"><video  controls><source src="'+pop_img+'" type="video/mp4"></video></div></div>');
     
      $(".pop_img").css("width",$(this).width());
       
     $(".pop_img_wrap").click(function(event){
     setTimeout(function(){
     	$(".pop_img_wrap").remove()
     })
     });
     $(".pop_img").click(function(event){
     	return false
     });


      return false
});
    }
    else {
    $(".gallery-wrap a").click(function(event){
    var pop_img= $(this).attr('href');
    $("body").append('<div class="pop_img_wrap"><div class="pop_img"><video  controls><source src="'+pop_img+'" type="video/mp4"></video></div></div>');
     
      $(".pop_img").css("width",$(this).width()*1.5);
       
     $(".pop_img_wrap").click(function(event){
     setTimeout(function(){
     	$(".pop_img_wrap").remove()
     })
     });
      $(".pop_img").click(function(event){
     	return false
     });

      return false
});
    }
}
$(window).on("resize", resize);
resize(); // call once initially