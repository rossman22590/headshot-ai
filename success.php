

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
<script>(function(w,r){w._rwq=r;w[r]=w[r]||function(){(w[r].q=w[r].q||[]).push(arguments)}})(window,'rewardful');</script>
<script async src='https://r.wdfl.co/rw.js' data-rewardful='50e123'></script>
<script>
  rewardful('ready', function() {
    if(Rewardful.referral) {
      console.log('Current referral ID: ', Rewardful.referral);
    } else {
      console.log('No referral present.');
    }
  });
</script>
</head>
<body>

<div class="success-section">
  <div class="success-container">
  <div class="col-6">
    <div class=submit-logo>
      <img src="images/logo.png">
    </div>  
        <form action="submit.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">

          
          <h4 style="text-align: center;"> Thanks for your purchase! The rest will be quick! </h4>  
          <br><br>

          <!-- retrieve stripe payment id-->
          <input type="hidden" name="payment_id" value="<?php echo $_GET['payment_id']; ?>">
          <!--retrieve email from stripe payment  -->
          <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">

            <!-- name form submission fields here -->
            <label for="email">Email:</label>
            <input type="text" name="email" required>
            <p style="margin-top: 10px; color: grey;"> Please enter the email you used to purchase the service. </p>

            <br>

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
            <label for="photos">Upload 20 photos:</label>
            <input type="file" id="photos" name="userfile[]" multiple accept="image/jpeg, image/jpg, image/png, image/webp, image/heic" required>
            <div>
              <br>

              <img src="images/guideline.jpg" style="margin: auto; display: flex; padding: 10%; padding-top: 0px; padding-bottom: 0px; width: 50%; max-width: 800px; min-width: 400px;">
            <?php
            $Msg = "";
            if (isset($_GET['error'])) {
              echo 'Error: Only .png, .jpeg, .jpg, .webp, and .heic files are allowed under the size of 3MB each. 20 or more photos are required.';
            }
            if (isset($_GET['success'])) : {
              $hidemydiv = "hide";
            } ?>
              <p>Your file has been successfully uploaded.<a href="index.php"> <br><br> Click here to go back to the homepage</a>
            </p>
            <br>
            <?php endif; ?>
            </div>

            
            <button type="submit" name="submit" class="success-button <?php echo $hidemydiv ?>">Submit</button>
          </div>
        </form>

  </div>
  </div>
</div>

</body>
</html>


