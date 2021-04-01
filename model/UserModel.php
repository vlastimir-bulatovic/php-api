<?php
class UserModel{

    private $id;
    private $name;
    private $email;
    private $created;
    
    public function getUser() {
        $userData = array (
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "created" => $this->created
        );
        return $userData;
    }
    public function setUser($data) {
        $this->id = $data["id"];
        $this->name = $data["name"];
        $this->email = $data["email"];
        $this->created = $data["created"];
    }
}
?> 