$(function(){
$("article")
.on("mouseover",function(){
	$(this).find(".blackLine").addClass("active");
})
.on("mouseleave",function(){
	$(this).find(".blackLine").removeClass("active");
});

});
