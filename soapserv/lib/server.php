<?php

  include("../model/model.php");

  try {
    $server = new SOAPServer(NULL, array(
       "uri" => "http://localhost/soapserv/lib/server.php"
      ));
    
    // Setando a classe que contem os metodos
    $server->setClass("Model");
    $server->handle();

  } catch (SOAPFault $f) {
    print $f->faultstring;
    exit;
    
  }

?>