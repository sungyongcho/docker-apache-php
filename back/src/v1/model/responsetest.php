<?php

require_once('Response.php');

$response = new Response();
$response->setSuccess(false);
$response->setHttpStatusCode(404);
$response->addMessage("Test Message 1");
$response->addMessage("Test Message 2");

$response->send();
