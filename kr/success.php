

<!DOCTYPE html>
<html lang="en">
<head>

<meta property="og:title" content="헤드샷 AI - 전문적인 인공지능 헤드샷 생성기"/>
<meta property="og:url" content="https://headshotai.studio"/>
<meta property="og:image" content="https://i.imgur.com/JTSCbpq.png" />
<meta property="og:description" content="완벽한 헤드샷이 단 한 번의 클릭으로 가능합니다."/>
<meta property='og:image:width' content="1200" />
<meta property='og:image:height' content="627" />
<!-- TYPE BELOW IS PROBABLY: 'website' or 'article' or look on https://ogp.me/#types -->
<meta property="og:type" content='website'/>
<meta name="description" conten="프로 AI 헤드샷으로 최고의 첫인상을 남기세요. 링크드인이나 이력서에 이상적인 프로필. 지금 바로 경력을 업그레이드하세요. ">
<link rel="alternate" href="https://headshotai.studio" hreflang="en" />
<link rel="alternate" href="https://headshotai.studio/kr/" hreflang="ko" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11116963981"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11116963981');
</script>
<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11116963981/6RbgCJP1gZIYEI3R_bQp'});
</script>

<title>프로 AI 헤드샷 만들기 - 스튜디오 퀄리티, 링크드인 및 이력서에 완벽한 프로필</title>
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
</head>
<body>

<div class="success-section">
       
  <div class="success-container">
      
      
    <div class="form-section">

    <div class=submit-logo>
          <img src="images/logo.png">
      </div> 
    <h4 style="text-align: center; font-weight: 800"> 구매해 주셔서 감사합니다! 나머지는 금방 끝날 것입니다! </h4> 
          <br><br> 
        <form action="submit.php" method="POST" enctype="multipart/form-data">
          <div>
          <?php
            $Msg = "";
            if (isset($_GET['error'])) {
              echo '오류입니다: .png, .jpeg, .jpg, .webp, .heic 파일은 각각 10MB 이하로만 허용됩니다. 20장 이상의 사진이 필요합니다.';
            }
            if (isset($_GET['success'])) : {
              $hidemydiv = "hide";
            } ?>
              <p>Your file has been successfully uploaded. You headshots will be sent to your email in the next 72 hours, please check your spam folder.<a href="index.php"> <br><br> Click here to go back to the homepage</a>
            </p>
            <br>
            <?php endif; ?>
          </div>
          <div class="form-group">
          <!-- retrieve stripe payment id-->
          <input type="hidden" name="payment_id" value="<?php echo $_GET['payment_id']; ?>">
          <!--retrieve email from stripe payment  -->
          <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">

            <!-- name form submission fields here -->
            <label for="email">Email:</label>
            <input type="text" name="email" required>
            <p style="margin-top: 10px; color: grey;"> 서비스 구매 시 사용한 이메일을 입력하세요. 결과는 이 이메일로 전송되므로 스팸 메일을 확인하고 이메일을 "스팸 없음"으로 표시해 주세요. </p>

            <br>

            <label for="name">이름:</label>
            <input type="text" id="name" name="name" required>
          
            <br><br>
          
            <label for="gender">성별:</label>
            <select id="gender" name="gender" required>
            <option value="">성별 고르기</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>

            <br><br>
            <label for="photos">사진 20장 업로드 - 아래의 업로드 가이드라인을 주의 깊게 따르세요:</label>
            <input type="file" id="photos" name="userfile[]" multiple accept="image/jpeg, image/jpg, image/png, image/webp, image/heic" required>
            <p style="margin-top: 10px; color: grey;"> 이미지 파일이 큰 경우 업로드에 시간이 걸릴 수 있으며, 업로드에 계속 문제가 발생하면 support@headshotai.studio 으로 문의하시기 바랍니다. </p>
            <div id="preview"></div>
            <div>
              <br>
              <div class="guideline-image">
                <img src="images/guideline.jpeg">
              </div>
            <?php
            $Msg = "";
            if (isset($_GET['error'])) {
              echo '오류입니다: .png, .jpeg, .jpg, .webp, .heic 파일은 각각 10MB 이하로만 허용됩니다. 20장 이상의 사진이 필요합니다.';
            }
            if (isset($_GET['success'])) : {
              $hidemydiv = "hide";
            } ?>
              <p>파일이 성공적으로 업로드되었습니다. 72시간 이내에 이메일로 헤드샷이 전송될 예정이니 스팸 폴더를 확인해 주세요.<a href="index.php"> <br><br> 홈페이지로 돌아가려면 여기를 클릭하세요.</a>
            </p>
            <br>
            <?php endif; ?>
            </div>

            
            <button type="submit" name="submit" class="success-button <?php echo $hidemydiv ?>">입력하기</button>
        </div>
        </form>


    </div>
  </div>
</div>


</body>
</html>


