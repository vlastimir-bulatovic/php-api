<?php 
include "./../../../config.php";
include "./../../../controler/UserControler.php";
include "./../../../model/UserModel.php";
include "./../../../view/UserView.php";
include "./../../../db.php";
include "request.php";

$UserController = new UserController();
$UserController->delete($id);


?>