<?php

namespace App\Models;

use App\Models\database;

class registerModel extends database{
    //Insert vào csdl
    public function store($data) {
        $name = $data["name"];
        $email = $data["email"];
        $password = $data["password"];
        $confirm_password = $data["confirm_password"];

        if (empty($name) || empty($email) || empty($password) || ($password != $confirm_password)) {
            return false;
        }
        $sqlInsert = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

        if (mysqli_query($this->connection, $sqlInsert)) {
            return true;
        }
        return false;
    }
}
