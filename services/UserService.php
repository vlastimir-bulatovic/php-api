<?php

    class UserService{

        public function allService($num) {

            $users = array();

            $user = new UserModel();

            if( $num > 0 && $num != null ){
                foreach($num as $row) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $created = $row['created'];

                    $user->setUser(array(
                        "id" => $id,
                        "name" =>$name,
                        "email" => $email,
                        "created" => $created, 
                    ));

                    $userData = $user->getUser();

                    $users[] = $userData;
                }
            }
            return $users;
        }

        public function indexService($num) {

            $users = array();

            $user = new UserModel();

            if( $num > 0 && $num != null ){
                foreach($num as $row) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $created = $row['created'];

                    $user->setUser(array(
                        "id" => $id,
                        "name" =>$name,
                        "email" => $email,
                        "created" => $created, 
                    ));

                    $userData = $user->getUser();

                    $users[] = $userData;
                }

                $response = json_encode($users); 
                
            }else {

                $message = array("message" => "No user with this id");
                $response = json_encode($message); 

            }

            return $response;
        }

        public function storeService($stmt) {
            if( $stmt->execute()){
                $message = array("message" => "Stored Success.");
            }else {
                $message = array("message" => "Error.");
            }

            return $message;
        }

        public function deleteService($stmt) {
            if( $stmt->execute()){
                $message = array("message" => "Success.");
            }else {
                $message = array("message" => "Error.");
            }

            return $message;
        }

        public function updateService($stmt) {
            if( $stmt->execute()){
                $message = array("message" => "Updated Success.");
            }else {
                $message = array("message" => "Error.");
            }

            return $message;
        }
    }

?>