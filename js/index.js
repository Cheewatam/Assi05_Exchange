$(".dropdown").on("click", function(){
  $(this).toggleClass("flip");
})

$(".back ul li").on("click", function(){
  val = $(this).html();
  $("span").html(val);
});