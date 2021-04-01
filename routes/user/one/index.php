<?php 
include "./../../../controler/UserControler.php";
include "./../../../model/UserModel.php";
include "./../../../view/UserView.php";
include "./../../../db.php";

$request = json_decode(file_get_contents("php://input"));
$id = $request->id;

$UserController = new UserController();
$UserController->indexOne($id);


?>