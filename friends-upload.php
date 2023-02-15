

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

<script>
    const fileInput = document.getElementById("fileInput");
    const preview = document.getElementById("preview");

    fileInput.addEventListener("change", function() {
      // Clear the preview div
      preview.innerHTML = '';

      // Loop through the selected files
      for (let i = 0; i < fileInput.files.length; i++) {
        const file = fileInput.files[i];

        // Create a new FileReader object
        const reader = new FileReader();

        // Set the reader to load the file as a data URL
        reader.readAsDataURL(file);

        // When the reader has loaded the file, do the following
        reader.onload = function(event) {
          // Create a new image element
          const image = new Image();

          // Set the image source to the data URL
          image.src = event.target.result;

          // Append the image element to the preview div
          preview.appendChild(image);
        };
      }
    });
  </script>
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
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta property=’og:title’ content='Headshot AI'/>
<meta property=’og:image’ content='https://i.imgur.com/cdgmmQH.jpg'/>
<meta property=’og:description’ content='Your perfect headshot is just a click away.'/>
<meta property=’og:url’ content='https://headshotai.studio'/>
<meta property='og:image:width' content='1200' />
<meta property='og:image:height' content='627' />
<!-- TYPE BELOW IS PROBABLY: 'website' or 'article' or look on https://ogp.me/#types -->
<meta property="og:type" content='website'/>
</head>
<body>

<div class="success-section">
       
  <div class="success-container">
      
      
    <div class="form-section">

    <div class=submit-logo>
          <img src="images/logo.png">
      </div> 
    <h4 style="text-align: center; font-weight: 800"> Welcome friend! Upload your photos here. </h4> 
          <br><br> 
        <form action="submit.php" method="POST" enctype="multipart/form-data">

          <div class="form-group">
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
            <div id="preview"></div>
            <div>
              <br>
              <div class="guideline-image">
                <img src="images/guideline.jpg">
              </div>
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


