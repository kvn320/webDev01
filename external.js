function swapContent(input){
	var url="loader.php";
	$.post(url, {pageVar: input}, function(data){
		$("#myDiv").html(data);	
	});
}