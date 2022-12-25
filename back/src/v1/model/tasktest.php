<?php

require_once('Task.php');

try{
	$task = new Task(0, "Title here", "Description here", "01/01/2019 12:00", "N");
	header('Content-Type: application/json;charset=UTF-8');
	echo json_encode($task->returnTaskAsArray());
}
catch (TaskExecption $ex){
	http_response_code(500);
	echo "Error: ".$ex->getMessage();
}
