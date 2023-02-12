<?php

if(isset($_POST['submit'])) 
{

  $allowed = array('jpg', 'jpeg', 'png', 'webp', 'heic');

  $maxCount = 20;
  $maxSize = 2097152;
  
  $count = 0;
  $uploadedFiles = array();

  $uploadDir = '/Applications/XAMPP/xamppfiles/htdocs/photo_uploads/';

  foreach ($_FILES['photos']['name'] as $fileIndex => $fileName) {
    $file = $_FILES['userfile'];
    $fileName = $_FILES['userfile']['name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileError = $_FILES['userfile']['error'];
    $fileType = $_FILES['userfile']['type'];
    $fileTmpName = $_FILES['userfile']['tmp_name'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
              if ($fileSize < $maxSize) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = $uploadDir.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                array_push($uploadedFiles, $fileDestination);
                $count++;
                
                } else {
                  echo "Each photo must be under 3MB!";
                        }

      } else {
        echo "There was an error uploading your file!";
      }
      
  } else {
    echo "Only .png, .jpeg, .jpg, .webp, and .heic files are allowed under the size of 3MB each";
  } 
} 


if ($count >= 20 && $count === count($_FILES['photos']['name'])) {
  header("Location: success.php?success");
}
else {
  header("Location: success.php?error");
}

}
?>