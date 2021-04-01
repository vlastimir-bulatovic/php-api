<?php 
include "./../../../controler/UserControler.php";

include "./../../../model/UserModel.php";

include "./../../../view/UserView.php";

include "./../../../services/DatabaseService.php";
include "./../../../services/UserService.php";

include "./../../../repository/UserRepository.php";

$UserController = new UserController();
$UserController->all();


?>