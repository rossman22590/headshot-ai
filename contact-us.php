<?php include 'inc/header.php'; ?>

<!--email submission form formatted with divs -->

  <div class="contact-section">
    <div class="contact-container">
      <div class="contact-header">
        <h3>Contact Us</h3>
        <p>Fill out the form below to send us an email.</p>
        <p>Or, you can email us directly at <a href="mailto:brian@headshotai.studio" style="color: #0065CC;">support@headshotai.studio</a>.</p>

      </div>


    <div class="contact-form">
    <div class="col-6">
        <form action="mail-handler.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">

                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">

                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your subject">


                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" placeholder="Enter your message"></textarea>

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

                <button class="btn btn-primary" name="btn-send">Submit</button>
            </div>
        </form>

    </div> 
    </div>  
</div>
</div>

<!--get this to send an email to my email address? -->


<?php include 'inc/footer.php'; ?>


