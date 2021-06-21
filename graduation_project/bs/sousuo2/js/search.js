function nipicIndexSearch (){
	
	$("#keyword").focus(function(){
		$(this).css("outline","none");
		$("#searchsort").show().stop(true,false).animate({"width" : "66px"},200);
	});

	$(document).click(function(evt){
		if($(evt.target).attr("id") == "searchsort" || $(evt.target).attr("id") == "keyword"  || $(evt.target).closest("#searchsort").length > 0){
			$("#searchsort").show();
		}else{
			$("#searchsort").stop(true,false).animate({"width":"0px"},500,function(){
				$(this).css("overflow","hidden");
				$(this).hide();
			});
		}
	});

	$("#searchsort").hover(function(){
		$(this).css("overflow","visible");
		$(".searchsortlist").show();	
	},function(){
		$(this).css("overflow","hidden");
		$(".searchsortlist").hide();	
	});

	$(".searchItem").hover(function(){
		$(this).css({"background-color":"#039","color":"#fff"}).siblings().css({"background-color":"#fff","color":"#333"})
	});

	$(".searchItem").click(function(){
		var itemName = $(this).html(),kw = $("#keyword").val();
		$(".selectedsort .itemName").html(itemName);
		var url = "http://soso.nipic.com/search.asp?itemName=" + itemName + "&kw=" + kw;	
		if(kw.length != 0){
			window.location.href = url;
		}
	});

	$("#searchbtn").click(function(){
		var itemName = $(".itemName").html(),kw = $("#keyword").val();
		var url = "http://soso.nipic.com/search.asp?itemName=" + itemName + "&kw=" + kw;
		window.location.href = url;
		return false;
	});

	$("#keyword").keydown(function(evt){
		var keycode = evt.keyCode;
		if(keycode == 13){
			var itemName = $(".itemName").html(),kw = $("#keyword").val();
			var url = "http://soso.nipic.com/search.asp?itemName="+ itemName + "&kw=" + kw;
			window.location.href = url;
			return false;
		}
	});
	
}