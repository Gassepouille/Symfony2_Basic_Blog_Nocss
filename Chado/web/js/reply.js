$(function(){

	$("body").on("click",".reply-comment", function(e){
		$(this).parent().append($("#createcomment"))
		$("#chado_mainbundle_chadocomments_parentid").attr('value',$(this).attr("value"));
	})


});