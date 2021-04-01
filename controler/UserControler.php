<?php 

class UserController{


	public function index() {

        $databaseService = new DatabaseService();
        $conn = $databaseService->getConnection();

        $query = "SELECT * FROM user ";
        $stmt = $conn->prepare( $query );
        $stmt->execute();
        $num = $stmt->fetchAll();

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

        $response = json_encode($users);         

        $view = new UserView();
        $viewUser = $view->setUserView($response);

        return $viewUser;

    }

    public function indexOne($id) {

        $databaseService = new DatabaseService();
        $conn = $databaseService->getConnection();

        $query = "SELECT * FROM user WHERE id=:id";
        $stmt = $conn->prepare( $query );
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $num = $stmt->fetchAll();

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
        

        $view = new UserView();
        $viewUser = $view->setUserView($response);

        return $viewUser;

    }

    public function delete($id) {

        $databaseService = new DatabaseService();
        $conn = $databaseService->getConnection();

        $query = "DELETE FROM user WHERE id= :id";

        $stmt = $conn->prepare( $query );
        $stmt->bindParam(':id', $id); 
        

        if( $stmt->execute()){
            $message = array("message" => "Success.");
        }else {
            $message = array("message" => "Error.");
        }

        $response = json_encode($message);         

        $view = new UserView();
        $viewUser = $view->setUserView($response);

        return $viewUser;

    }


    public function store($request) {

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

        if( $stmt->execute()){
            $message = array("message" => "Stored Success.");
        }else {
            $message = array("message" => "Error.");
        }

        $response = json_encode($message);         

        $view = new UserView();
        $viewUser = $view->setUserView($response);

        return $viewUser;

    }

    public function update($request) {

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

        if( $stmt->execute()){
            $message = array("message" => "Updated Success.");
        }else {
            $message = array("message" => "Error.");
        }

        $response = json_encode($message);         

        $view = new UserView();
        $viewUser = $view->setUserView($response);

        return $viewUser;

    }
}
?>