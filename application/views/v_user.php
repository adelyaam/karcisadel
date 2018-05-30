<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<form method="POST" action="<?php echo base_url()."index.php/user/do_insert"; ?>">
		<table>
		ID :<input name="id" value=""><br/>
		Username :<input name="username" value=""><br/>
		Password :<input name="password" type="password" value=""><br/>
		Fullname :<input name="fullname" value=""><br/>
		Level :<select name="level">
			<option value="admin">Admin</option>
			<option value="user">User</option>
		<input name="tombol" type="submit" value="simpan">
		</table>		
		</form>
	</center>
</body>
</html>