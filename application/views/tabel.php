<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" style="border-collapse:collapse; width:50%;">
		<tr style="background:grey;">
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Fullname</th>
			<th>Level</th>
			<th>Action</th>
		</tr>
	<?php foreach($data as $d){ ?>
	<tr>
		<td><?php echo $d['id']; ?></td>
		<td><?php echo $d['Username']; ?></td>
		<td><?php echo $d['Password']; ?></td>
		<td><?php echo $d['Fullname']; ?></td>
		<td><?php echo $d['Level']; ?></td>
		<td>
			<a href=" ">edit</a>
			<a href="<?php echo base_url()."index.php/user/do_delete/".$d['id']; ?>">delete</a>
		</td>
	</tr>
<?php
	}
?>
</table>
<a href="<?php echo base_url()."index.php/user/add_data"; ?>">Tambah Data</a>
</body>
</html>
