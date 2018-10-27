<?php
	include("../lib/client.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP - SOAP</title>
</head>
<body>
	<form action="../controller/controller.php?op=cad" method="post">
		<label for="name">NAME</label>
		<input type="text" name="name" /><br>
		<label for="email">EMAIL</label>
		<input type="text" name="email" /><br>
		<input type="submit" value="salvar" />
	</form>
	<br>
	<table border="1" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th>NAME</th>
				<th>EMAIL</th>
				<th colspan="2">OPCOES</th>
			</tr>
		</thead>
		<tbody>

			<?php 
				
				$result = $client->__soapCall("listAll", array());

				if($result) {
		
					foreach($result as $row) {
			?>
						<tr>
							<td><?php echo $row["name"]; ?></td>
							<td><?php echo $row["email"]; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['id']; ?>">Editar</a>
							</td>
							<td>
								<a href="../controller/controller.php?op=del&id=<?php echo $row['id']; ?>">Excluir</a>
							</td>
						</tr>
			<?php 
					}

				} else {
			?>
					<tr>
						<td colspan="4" align="center">Is Empty.</td>
					</tr>	
			<?php
				}
			?>

		</tbody>
	</table>
</body>
</html>