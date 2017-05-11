window.onload = function(){
         $("#menu > ul > li").hover(
          function(){ $(this).find("ul").slideDown('fast'); } ,
  function(){ $(this).find("ul").slideUp('fast'); } );
}

