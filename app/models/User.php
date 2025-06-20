<?php

class User extends Database{

    public function fetchAll(){
        $result = $this->query("SELECT * FROM users");
        $data = [];
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }

        return $data;
    }

    public function find($id){
        $id = $this->real_escape_string($id);
        $result = $this->query("SELECT * FROM users WHERE id = '$id'");
        if($result->num_rows > 0){
            return $result->fetch_assoc();
        }
        return null;
    }

    public function emailExist($email){
        $result = $this->query("SELECT * FROM users WHERE email = '$email'");
        if($result->num_rows > 0){
            return true;
        }else{
            return false;
        }

    }

    public function create($firstname, $lastname, $phone, $email, $password){
        // if(!$this->emailExist($email)){
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            return $this->query("INSERT INTO users (firstname, lastname, email, phone, password) VALUES ('$firstname', '$lastname', '$email', '$phone', '$hashed_password')");
        // }
    }

    public function loginUser($email, $password){
        $result = $this->query("SELECT * FROM users where email = '$email' ");
        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            if(password_verify($password, $user['password'])){
                return $user; // Return user data if login is successful
            } else {
            return ['status'=>'error', 'msg'=>'Incorect Password']; // User not found
            }
        } else {
            return ['status'=>'error', 'msg'=>'Incorrect Email']; // User not found
        }
        
    }

    public function updatePassword($email, $newPassword){
        $id = $this->real_escape_string($email);
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        
        $this->query("UPDATE users SET password = '$hashedPassword' WHERE email = '$email'");
        
        return $this->affected_rows > 0;
    }

}