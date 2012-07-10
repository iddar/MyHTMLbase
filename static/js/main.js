$(function(){
  

  $(window).hashchange( function(){
    var hash = location.hash;
    if(hash == '') {hash='#!/home';}
    //document.title = 'valor hash ' + ( hash.replace( /^#!\//, '') || 'blank' ) + '.';
    //document.title = 'valor hash ' + ( that.attr('title') || 'None' ) + '.';
    var an = $('.active').attr("href");
    $('nav a').each(function(){
      var that = $(this);
      //that[ that.attr( 'href' ) === hash ? 'addClass' : 'removeClass' ]( 'active' );
      if(that.attr( 'href' ) === hash){
          document.title = ( that.attr('title') || 'None' );
          $(".actual").hide("slide", { direction: "left" }, 350,function(){
            $('.'+(hash.replace( /^#!\//, ''))).show("slide", { direction: "right" }, 350).addClass("actual");
          }).removeClass("actual");
          
          if(!($("algo").length)){$('.'+(hash.replace( /^#!\//, ''))).addClass("actual"); }
          
      }else{
          that.removeClass('active');
      }
    });
  })
  
  $(window).hashchange();
  
});

$("#ct>section").hide("fast");