<?php


class Product extends Database{

    // public function __construct(){
    //     parent::connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // }

    public function fetchAll(){
        $result = $this->query("select * from products");
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
        $result = $this->query("select * from products where id = '$id'");
        if($result->num_rows > 0){
            return $result->fetch_assoc();
        }
        return null;
    }

    public function randomProducts($limit = 4){
        $result = $this->query("select * from products order by rand() limit $limit");
        $data = [];
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }

        return $data;
    }


}




