<?php

	$client = new SoapClient(NULL, array(
	      "location" => "http://localhost/soapserv/lib/server.php",
	      "uri" => "http://localhost/soapserv/lib/server.php",
	      "trace" => 1));

?>