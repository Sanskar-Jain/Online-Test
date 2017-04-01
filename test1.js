$(document).ready(function() {
		str="";
	$("#anchr").click(function(){
		//alert('balle balle');
		console.log($('input[type=\'radio\']:checked').val());
		str = $('input[type=\'radio\']:checked').val();
		str = str + $("#teraans").val();
		$("#teraans").val(str);
		
	});
	$("#teraans").val(str);
		
	
});