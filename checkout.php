<!DOCTYPE html>
<html>
<head>
    <title>Headshot AI Generator for Business - Corporate Professional Photo Studio Quality</title>
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <script src="https://js.stripe.com/v3/"></script>
  <meta charset="UTF-8">
  </head>



<div class="checkout-page">
    <div class="vertical-section">
        <div class="checkout-home">
            <a href="index.php" class="checkout-logo">
                <img src="images/checkout-logo.png" alt="Home Page">
            </a>
        </div>

        <div class="whole-checkout">
            <div class="whole-container">
                <div class="upper-box">
                        <h3>Select a package</h3>
                        <h4 class="package-subtext">Your career deserves attention and respect. One-time payment only.</h4>
                        <h4 class="package-subtext">Don't waste $250+ and hours out of your day for a traditional photoshoot.</h4>
                        <div class="packages">
                            <div class="packages-section">
                                <div class="package-text">
                                    <h4>$21</h4>
                                    <h2>Intern</h2>
                                    <p>7 professional  profile photos in small (512x512) format.</p>
                                </div>
                                <div class="paybutton-container">
                                    <form action="checkout-intern.php" method="POST">
                                        <button class="paybutton" type="submit">Select</button>
                                    </form>
                                </div>
                            </div>
                            <div class="packages-section" >
                                <div class="package-text">
                                    <h4>$35</h4>
                                    <h2>Professional</h2>
                                    <p>15 professional shots @ 4K resolution — 5 profile photos (4096x4096) + 10 portrait photos (16:9 aspect ratio).</p>
                                </div>
                                <div class="paybutton-container">
                                    <form action="checkout-professional.php" method="POST">
                                        <button class="paybutton-middle" type="submit">Select</button>
                                    </form>
                                </div>
                            </div>
                            <div class="packages-section-corporate">
                                <div class="package-text">
                                    <h4>$49</h4>
                                    <h2>Executive</h2>
                                    <p>30 professional shots @ 4K resolution — 10 profile photos (4096x4096) + 20 portrait photos (16:9 aspect ratio).</p>
                                </div>
                                <div class="paybutton-container">
                                    <form action="checkout-executive.php" method="POST">
                                        <button class="paybutton" type="submit">Select</button>
                                    </form>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="checkout-testimonial">
                            <p>Over 1000+ headshots created for over 100 happy clients. <a href="testimonials.php">Read what they say.</a> </p>
                        </div>
            </div>  
        </div>
    </div>
</div>
</html>