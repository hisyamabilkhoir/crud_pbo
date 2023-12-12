<?php

namespace App\Models;

use App\Core\Model;

class Student extends Model
{

    public function show()
    {
        $query = "SELECT * FROM tb_students";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $identity_number = $_POST['identity_number'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO tb_students
            SET identity_number=:identity_number, name=:name, email=:email, phone=:phone";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":identity_number", $identity_number);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);

        $stmt->execute();
    }

    public function edit($id)
    {
        $query = "SELECT * FROM tb_students WHERE id=:id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $id = $_POST['id'];
        $identity_number = $_POST['identity_number'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "UPDATE tb_students
          SET identity_number=:identity_number, name=:name, email=:email, phone=:phone WHERE id=:id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":identity_number", $identity_number);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_students WHERE id=:id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}
