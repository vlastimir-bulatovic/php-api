<?php 
include "./../../../controler/UserControler.php";
include "./../../../model/UserModel.php";
include "./../../../view/UserView.php";
include "./../../../db.php";

$UserController = new UserController();
$UserController->index();


?>