<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // retrieve the token from the form data
    $token = $_POST['token'];

    // check if the token has been used
    $sql = "SELECT * FROM form_tokens WHERE token = '$token' AND used = 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // token has already been used, reject the form submission
        echo "Error: This form has already been submitted.";
        exit;
    } else {
        // process the form data
        // ...

        // mark the token as used
        $sql = "UPDATE form_tokens SET used = 1 WHERE token = '$token'";
        mysqli_query($conn, $sql);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Headshot AI - Form Submission</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images/favicon.png" type="image/png">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link href="/dist/output.css" rel="stylesheet">
<meta charset="UTF-8">
<script src="jquery-3.6.1.min.js"></script>
</head>
<body>

<div class="contact-section">
  <div class="contact-container">
  <div class="col-6">
        <form action="submit.php" method="post">
          <div class="form-group">
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <!-- name form submission fields here -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
          
            <br><br>
          
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
          
            <br><br>
          
            <label for="photos">Upload Photos (JPG, PNG, WebP, HEIC, 20 pictures max):</label>
            <input type="file" id="photos" name="photos[]" multiple accept="image/jpeg, image/png, image/webp, image/heic" required>


            <br><br>
            <input type="submit" value="Submit">
          </div>
        </form>

  </div>
  </div>
</div>


</body>
</html>

