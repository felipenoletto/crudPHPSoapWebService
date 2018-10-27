<?php 

	include("../lib/client.php");

	$op = $_GET["op"];

	if($op == "cad") {
		$name = $_POST["name"];
		$email = $_POST["email"];

		$result = $client->__soapCall("insert", array($name, $email));

		if($result) {
			header("Location: ../view/view.php");
		} else {
			echo "Failed.";
		}

	} else if($op == "edit") {
		$id = $_POST["id"];
		$name = $_POST["name"];
		$email = $_POST["email"];

		$result = $client->__soapCall("update", array($id, $name, $email));

		if($result) {
			header("Location: ../view/view.php");
		} else {
			echo "Failed.";
		}

	} else if($op == "del") {
		$id = $_GET["id"];

		$result = $client->__soapCall("delete", array($id));

		if($result) {
			header("Location: ../view/view.php");
		} else {
			echo "Failed.";
		}

	}

?>