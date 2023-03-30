<?php

if(isset($_POST['submit'])) 
{

  $allowed = array('jpg', 'jpeg', 'png', 'webp', 'heic');

  $minCount = 20;
  $maxSize = 10485760;
  
  $count = 0;
  $uploadedFiles = array();

  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $tag = uniqid();


  $uploadDir = "/home/u327334328/domains/headshotai.studio/product-images/$name.$gender.$email.$tag/";

  
    foreach($_FILES['userfile']['name'] as $key => $val) {
      $fileName = $_FILES['userfile']['name'][$key];
      $tmpName = $_FILES['userfile']['tmp_name'][$key];
      $fileSize = $_FILES['userfile']['size'][$key];
      $fileType = $_FILES['userfile']['type'][$key];
      $ext = pathinfo($fileName, PATHINFO_EXTENSION);
  
      if(in_array($ext, $allowed)) {
        if($fileSize < $maxSize) {
          $count++;
          $newFileName = uniqid() . '.' . $ext;
          if(!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
          }
          $uploadFile = $uploadDir . $newFileName;
          if(move_uploaded_file($tmpName, $uploadFile)) {
            $uploadedFiles[] = $uploadFile;
          }
        }
      }
    }
  
    if($count >= $minCount) {
      header('Location: success.php?success');
    } else {
      header('Location: success.php?error');
    }
  }




?>