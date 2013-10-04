<html>
<head>
<script type="text/javascript" src="http://j.mp/jquerylazy"></script>
<script type="text/javascript">
$(document).ready(function(){
	$.get($this).attr('action')+"?callback=?", $(this).serialize(), function(dojo{
		var temp = dojo.data.current_condition[0].temp_F;
		$('#forecast').text("the current temperature is: " + temp);
	}, 'json');
	return false;
	});
});
</script>
</head>
<body>
	<form action = 'http://api.worldweatheronline.com/free/v1/weather.ashx' method = 'get'>
		<select name = 'q'>
		<option value = '94303'>Mountain View</option>
		<option value = '98005'>Bellevue</option>
		<option value = '77005'>Houston</option>
	</select>
	<input type = 'hidden' name = 'key' value = 'jtpc4myth9fwxjgwz9fh5fw5'>
	<input type = 'hidden' name = 'format' value = 'json'>
	<input type = 'submit' value = 'get weather!'>
	</form>
	<div id = 'forecast'>
	</div>
</body>
</html>
