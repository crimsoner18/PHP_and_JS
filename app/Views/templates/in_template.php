<?php
  $data['name'] = $name;
  $data['id']   = $id;
  echo view('templates/header');
  echo view($main,$data);
  echo view('templates/footer');
?>
