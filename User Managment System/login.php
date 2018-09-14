


<html>
<head>
<style type="text/css">
div h3{
text-align:center;}	
div {
	margin:50px auto 0px;
	width: 40%;
}
.error {
	color: red;
	float: left;
}
</style>
</head>
<body>
	<div>
<h3>Login Form</h3>
<p class="error">
<?php
if(isset($_GET['error'])){
echo $_GET['error'];
}
?></p>
<form action="login_code.php" method ="POST">
<table>
<tr>
	<td>Username:</td><td><input type="text" name="username"/></td>
</tr>
<tr>
	<td>Password:</td><td><input type="password" name="password"></td>
</tr>
<tr>

	<td>	<input type="reset" value="Reset" name="clear"></td>
	<td><input type="submit" value="Submit" name="submit">
	</td>
</tr>
</table>

</form>
</div>
</body>
</html>
