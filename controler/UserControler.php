<?php 

class UserController{

	public function all() {

        $userRepository = new UserRepository();
        $users = $userRepository->allRepository();

        $response = json_encode($users);         

        $view = new UserView();
        $viewUser = $view->setUserView($response);

        return $viewUser;

    }

    public function index($id) {

        $userRepository = new UserRepository();
        $response = $userRepository->indexRepository($id);

        $view = new UserView();
        $viewUser = $view->setUserView($response);

        return $viewUser;

    }

    public function delete($id) {

        $userRepository = new UserRepository();
        $message = $userRepository->deleteRepository($id);

        $response = json_encode($message);         

        $view = new UserView();
        $viewUser = $view->setUserView($response);

        return $viewUser;

    }


    public function store($request) {

        $userRepository = new UserRepository();
        $message = $userRepository->storeRepository($request);

        $response = json_encode($message);         

        $view = new UserView();
        $viewUser = $view->setUserView($response);

        return $viewUser;

    }

    public function update($request) {

        $userRepository = new UserRepository();
        $message = $userRepository->updateRepository($request);

        $response = json_encode($message);         

        $view = new UserView();
        $viewUser = $view->setUserView($response);

        return $viewUser;

    }
}
?>