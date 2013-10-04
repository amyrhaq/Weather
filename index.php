<html>
<head>
	<h1>The Weather Report</h1>
<script type="text/javascript" src="http://j.mp/jquerylazy"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("form").submit(function(){
	$.get($(this).attr('action')+"?callback=?", $(this).serialize(), function(dojo){
		console.log(dojo);
		var temp = dojo.data.current_condition[0].temp_F;
		var temp2 = dojo.data.current_condition[0].temp_C;
		var temp3 = dojo.data.current_condition[0].windspeedMiles;
		var temp4 = dojo.data.current_condition[0].weatherDesc;
		console.log(temp4);
		$('#forecast').html("<p>the current temperature in Fahrenheit is " + temp + "</p><p>Celsius is " + temp2 + "</p><p>Windspeed in MPH is " + temp3+ "</p>");
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
		<input type = 'hidden' name = 'key' value = '4xgrmeqktdvqv9fsuezx4953'>
		<input type = 'hidden' name = 'format' value = 'json'>
		<input type = 'submit' value = 'Get Weather!'>
	</form>
	<div id = 'forecast'>
	</div>
</body>
</html>
