<?php 
include "./../../../config.php";
include "./../../../controler/UserControler.php";
include "./../../../model/UserModel.php";
include "./../../../view/UserView.php";
include "./../../../db.php";

$data = json_decode(file_get_contents("php://input"));

$UserController = new UserController();
$UserController->store($data);


?>