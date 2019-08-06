<!DOCTYPE html>
<html>
<head>
	<title>Navigate</title>
	<script type="text/javascript">
		function navigate(){
			var e = document.getElementById('menu');
			window.open(e.value ,'_blank');
		}
	</script>
</head>
<body>
	<form>
		<select id="menu">
			<option value="https://www.google.com">Google</option>
			<option value="https://www.youtube.com">YouTube</option>
			<option value="https://www.twitter.com">Twitter</option>
		</select>
		<input type="button" value="Go" onclick="navigate()">
	</form>

</body>
</html>