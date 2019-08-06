<!DOCTYPE html>
<html>
<head>
	<title>Question2</title>

</head>
<body>
	<script type="text/javascript">
		var x = "10";
		function f() {
			var x = "4";
			alert(this.x);
			function g(){
				alert(x);
			}g();
		}f();
	</script>
</body>
</html>