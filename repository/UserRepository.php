<?php 

    class UserRepository{

        public function allRepository() {

            $userService = new UserService();
            $response = $userService->UserServiceAll();

            return $response;
            
        }

        public function indexRepository($id) {

            $userService = new UserService();
            $response = $userService->UserServiceIndex($id);

            return $response;
            
        }

        public function storeRepository($request) {

            $userService = new UserService();
            $response = $userService->UserServiceStore($request);

            return $response;
            
        }

        public function deleteRepository($id) {
            
            $userService = new UserService();
            $response = $userService->UserServiceDelete($id);

            return $response;
        }

        public function updateRepository($request) {

            $userService = new UserService();
            $response = $userService->UserServiceUpdate($request);

            return $response;
        }
    }
?>