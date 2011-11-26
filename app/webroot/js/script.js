$(document).ready(function(){
   $('nav ul li a').click(function(event){
    	$(this).attr("class" ,"current");
		$(this).parent().siblings().find("a").removeClass('current');
   });
 });
