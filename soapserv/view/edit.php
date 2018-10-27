<?php
	include("../lib/client.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDITAR</title>
</head>
<body>
	<?php 

		$id = $_GET["id"];

		$result = $client->__soapCall("listById", array($id));

		//foreach ($result as $row) {
	?>

		<form action="../controller/controller.php?op=edit" method="post">
			<input type="text" name="name" value="<?php echo $result['name'] ?>"><br>
			<input type="text" name="email" value="<?php echo $result['email'] ?>"><br>
			<input type="hidden" name="id" value="<?php echo $id ?>"><br>
			<input type="submit" value="gravar">
		</form>

	<?php
		//}
	?>
</body>
</html>