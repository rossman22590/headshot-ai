<?php

if(isset($_POST['submit'])) 
{
    // Define allowed mime types and extensions
    $allowedMimeTypes = array('image/jpeg', 'image/png', 'image/webp', 'image/heic');
    $allowedExtensions = array('jpg', 'jpeg', 'png', 'webp', 'heic');

    // Set minimum and maximum values for file count and size
    $minCount = 20;
    $maxSize = 10485760; // 10 MB

    // Initialize counters and arrays
    $count = 0;
    $uploadedFiles = array();

    // Extract user information and generate a unique tag
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $tag = uniqid();

    // Create upload directory using user information and tag
    $uploadDir = "/home/u327334328/domains/headshotai.studio/product-images/$name.$gender.$email.$tag/";

    // Loop through each uploaded file
    foreach($_FILES['userfile']['name'] as $key => $val) {
        $fileName = $_FILES['userfile']['name'][$key];
        $tmpName = $_FILES['userfile']['tmp_name'][$key];
        $fileSize = filesize($tmpName);
        $fileType = $_FILES['userfile']['type'][$key];
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);

        // Check if file format is allowed
        if(in_array($ext, $allowedExtensions) && in_array($fileType, $allowedMimeTypes)) {
            // Check if file size is within limit
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
            } else {
                // File size error
                $errorMessage = "File size exceeds the maximum limit of " . $maxSize / 1024 / 1024 . " MB";
                header("Location: success.php?error=$errorMessage");
                exit();
            }
        } else {
            // File format error
            $errorMessage = "Invalid file format. Only " . implode(', ', $allowedExtensions) . " files are allowed";
            header("Location: success.php?error=$errorMessage");
            exit();
        }
    }

    // Check if minimum file count is met
    if($count >= $minCount) {
        header('Location: success.php?success');
    } else {
        // Minimum file count error
        $errorMessage = "Minimum file count of $minCount not met";
        header("Location: success.php?error=$errorMessage");
        exit();
    }
}

?>