<?php include 'inc/header.php'; ?>

<!--email submission form formatted with divs -->

  <div class="contact-section">
    <div class="contact-container">
      <div class="contact-header">
        <h3>문의하기</h3>
        <p>아래 양식을 작성하여 이메일을 보내주세요.</p>
        <p>또는 직접 이메일(<a href="mailto:support@headshotai.studio" style="color: #0065CC;">support@headshotai.studio</a>)로 문의하실 수 있습니다.</p>

      </div>


    <div class="contact-form">
    <div class="col-6">
        <form action="mail-handler.php" method="post">
            <div class="form-group">
                <label for="name">이름</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="이름을 입력하세요.">

                <label for="email">이메일</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="이메일 입력하게요">

                <label for="subject">제목</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="제목 입력하세요">


                <label for="message">내용</label>
                <textarea class="form-control" id="message" name="message" placeholder="내용 입력하세요"></textarea>

                <?php
            $Msg = "";
            if (isset($_GET['error'])) {
                $Msg = "Please fill in the required fields:";
                echo '<div class="alert alert-danger">' . $Msg . '</div>';
            }

            if (isset($_GET['success'])) {
                $Msg = "Your message has been sent. We will get back to you shortly.";
                echo '<div class="alert alert-success">' . $Msg . '</div>';
            }
            ?>

                <button class="btn btn-primary" name="btn-send">전송</button>
            </div>
        </form>

    </div> 
    </div>  
</div>
</div>

<!--get this to send an email to my email address? -->


<?php include 'inc/footer.php'; ?>


