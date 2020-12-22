<?php namespace App\Models;

use CodeIgniter\Model;

class AreaModel extends Model
{
  protected $table = 'areas';
  protected $allowedFields = ['user_id','name','contact_person','description'];

    public function getAreas(){
      $email = $items['email'];
      $pass = $items['password'];

      $query = $this->db->query('SELECT * FROM `areas`');

      return($query->getResult('array'));
    }

    public function getAreaName($id){
      $query = $this->db->query("SELECT `name` FROM `areas` WHERE id='$id'");
      $name = '';
      foreach($query->getResult('array') as $data):
        $name .= $data['name'];
      endforeach;

      return $name;
    }
    //--------------------------------------------------------------------

}
