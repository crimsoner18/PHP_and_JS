<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    public function login($items)
    {
      $email = $items['email'];
      $pass = $items['password'];

      $query = $this->db->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$pass'");

      return $query->getResult('array');
    }

    //--------------------------------------------------------------------

}
