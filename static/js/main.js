$(function(){
  $("ul a").pjax("article", { fragment: "article" });
  $('article').bind('pjax:start', function(){
    $('article').slideUp()
  }).bind('pjax:end', function(){
    $('article').slideDown()
  });
});