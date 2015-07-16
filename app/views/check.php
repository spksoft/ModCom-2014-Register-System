<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="<?php echo URL::to('js/jquery-1.11.1.min.js')?>"></script>
	</script>
</head>
<body>
	<div id="text">Test</div>
	<input type="text" name="stdid" id="in">
	<script>
		$("#in").keyup(function(){ 
   			var url = "getid/" + $("#in").val();
   			$.get(url, function(data) {
   				if(data == "ER") {
   					$("#text").html("Input Error");
   				}
   				else if(data == "NO") {
   					$("#text").html("Not work");
   				} else {
   					//var obj = jQuery.parseJSON( data );
   					alert(data.name);
   				}
   			});
		});
	</script>
</body>
</html>