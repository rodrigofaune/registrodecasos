<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejemplo validar contraseña repetida</title>


</head>
<body>
<form action="" method="post">
Pass1:
<input type="text" name="pass1" id="pass1"> <br>
Pass:2
<input type="text" name="pass2" id="pass2"><br>

<button  onclick="comprobarPass()">comprobar</button>

	</form>


	<script>
	
function comprobarPass() {

	var password1 = document.getElementById("pass1").value;
    var password2 = document.getElementById("pass2").value;

  if (password1!=password2) {

    alert("las contraseñas no son iguales");	

  }

}


</script>

</body>
</html>