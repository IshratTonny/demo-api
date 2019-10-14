<?php

header("content-type: application/json");
$request=$_SERVER['REQUEST_METHOD'];


switch ($request) {
    case "GET":
        echo '{"name": "get..ishrat"}';
        break;
    case "POST":
        echo '{"name": "post..ishrat"}';
        break;
    case "PUT":
        echo '{"name": "put..ishrat"}';
        break;
    case "PATCH":
         echo  '{"name": "patch..ishrat"}';
        break;
    case "DELETE":
      echo '{"name": "delete..ishrat"}';
        break;
      default:
        echo '{"name": "data not found"}';
        break;

}

