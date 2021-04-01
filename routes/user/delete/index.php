<?php 
include "./../../../controler/UserControler.php";

include "./../../../model/UserModel.php";

include "./../../../view/UserView.php";

include "./../../../services/DatabaseService.php";
include "./../../../services/UserService.php";

include "./../../../repository/UserRepository.php";

include "request.php";

$UserController = new UserController();
$UserController->delete($id);


?>