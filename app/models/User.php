<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['user_name'];
            $alamat = $_POST['alamat'];
            $hp = $_POST['hp'];
            $pos = $_POST['pos'];
            $role = $_POST['role'];

            $sql = "INSERT INTO tb_users
            SET user_email=:user_email, user_password=PASSWORD(:user_password), user_name=:user_name, user_alamat=:user_alamat, user_hp=:user_hp, user_pos=:user_pos, user_role=:user_role, ";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $email);
            $stmt->bindParam(":user_password", $password);
            $stmt->bindParam(":user_name", $name);
            $stmt->bindParam(":user_alamat", $alamat);
            $stmt->bindParam(":user_pos", $pos);
            $stmt->bindParam(":user_role", $role);
            $stmt->bindParam(":user_id", $role);


            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $alamat = $_POST['alamat'];
            $hp = $_POST['hp'];
            $pos = $_POST['pos'];
            $role = $_POST['role'];
            $id = $_POST['id'];

            if (!empty($password)) {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_password=PASSWORD(:user_password), user_name=:user_name
                  WHERE user_id=:user_id";
            } else {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_name=:user_name
                  WHERE user_id=:user_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $email);
            $stmt->bindParam(":user_password", $password);
            $stmt->bindParam(":user_name", $name);
            $stmt->bindParam(":user_alamt", $alamat);
            $stmt->bindParam(":user_hp", $hp);
            $stmt->bindParam(":user_pos", $pos);
            $stmt->bindParam(":user_role", $role);
            $stmt->bindParam(":user_id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
      }
}
