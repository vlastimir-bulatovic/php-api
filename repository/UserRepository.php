<?php 

    class UserRepository{

        public function allRepository() {

            $databaseService = new DatabaseService();
            $conn = $databaseService->getConnection();

            $query = "SELECT * FROM user ";
            $stmt = $conn->prepare( $query );
            $stmt->execute();
            $num = $stmt->fetchAll();

            $userService = new UserService();
            $response = $userService->allService($num);

            return $response;
            
        }

        public function indexRepository($id) {

            $databaseService = new DatabaseService();
            $conn = $databaseService->getConnection();

            $query = "SELECT * FROM user WHERE id=:id";
            $stmt = $conn->prepare( $query );
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $num = $stmt->fetchAll();

            $userService = new UserService();
            $response = $userService->indexService($num);

            return $response;
            
        }

        public function storeRepository($request) {

            $databaseService = new DatabaseService();
            $conn = $databaseService->getConnection();

            $user = new UserModel();

            $user->setUser(array(
                "id" => null,
                "name" =>$request->name,
                "email" => $request->email,
                "created" => null
            ));

            $userData = $user->getUser();

            $query = "INSERT INTO  user 
                SET  
                    name = :name,
                    email = :email
            ";

            $stmt = $conn->prepare( $query );
            $stmt->bindParam(':name', $userData["name"]); 
            $stmt->bindParam(':email', $userData["email"]); 

            $userService = new UserService();
            $response = $userService->storeService($stmt);

            return $response;
            
        }

        public function deleteRepository($id) {
            $databaseService = new DatabaseService();
            $conn = $databaseService->getConnection();

            $query = "DELETE FROM user WHERE id= :id";

            $stmt = $conn->prepare( $query );
            $stmt->bindParam(':id', $id); 
            

            $userService = new UserService();
            $response = $userService->deleteService($stmt);

            return $response;
        }

        public function updateRepository($request) {
            $databaseService = new DatabaseService();
            $conn = $databaseService->getConnection();

            $user = new UserModel();

            $user->setUser(array(
                "id" => $request->id,
                "name" =>$request->name,
                "email" => $request->email,
                "created" => null
            ));

            $userData = $user->getUser();

            $query = "UPDATE  user 
                SET  
                    name = :name,
                    email = :email
                WHERE 
                    id= :id
            ";

            $stmt = $conn->prepare( $query ); 
            $stmt->bindParam(':name', $userData["name"]); 
            $stmt->bindParam(':email', $userData["email"]); 
            $stmt->bindParam(':id', $userData["id"]);

            $userService = new UserService();
            $response = $userService->updateService($stmt);

            return $response;
        }
    }
?>