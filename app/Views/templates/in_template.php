<?php
  $data['name'] = $name;
  $data['room_id']   = $id;
  echo view('templates/header');
  echo view($main,$data);
  echo view('templates/footer');
?>
