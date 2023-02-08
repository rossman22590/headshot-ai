<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $photos = $_FILES['photos'];

  $allowedTypes = array('image/jpeg', 'image/png', 'image/webp', 'image/heic');
  $maxCount = 20;
  
  $count = 0;
  $uploadedFiles = array();
  
  foreach ($photos['tmp_name'] as $key => $tmp_name) {
    if ($count == $maxCount) {
      break;
    }
    
    if (in_array($photos['type'][$key], $allowedTypes)) {
      $count++;
      $uploadedFiles[] = array(
        'tmp_name' => $tmp_name,
        'name' => $photos['name'][$key]
      );
    }
  }
  
  if (count($uploadedFiles) < $maxCount) {
    echo 'Error: Only ' . implode(', ', $allowedTypes) . ' files are allowed and exactly ' . $maxCount . ' files are required.';
    exit;
  }
  
  // Move uploaded files to the desired location and save other form data to the database
  // ...
}
?>