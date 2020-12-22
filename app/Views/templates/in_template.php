<?php
  $data['name'] = $name;
  echo view('templates/header');
  echo view($main,$data);
  echo view('templates/footer');
?>
