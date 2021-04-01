<?php 

include "./../../controler/UserControler.php";

include "./../../model/UserModel.php";

include "./../../view/UserView.php";

include "./../../services/DatabaseService.php";
include "./../../services/UserService.php";
include "./../../repository/UserRepository.php";

$request = json_decode(file_get_contents("php://input"));
$id = $request->id;

$UserController = new UserController();
$UserController->index($id);


?>