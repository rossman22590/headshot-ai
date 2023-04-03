<footer>
  <div class="footer-wrapper">
  <div class="footer-logo">  
    <a href="https://headshotai.studio"> <img src="images/footer-logo.png" alt="Home Page"></a>
  </div>
  
<div class="footer-text">
  <p>Get your business headshots that make you look professional and feel confident. Make your studio-quality headshot with A.I. now. </p>
</div>

<div class="footer-links-container">
  <div class="footer-segment">
    <p class="footer-segment-heading"> Links</p>
    <div class="footer-links">
      <a href="checkout.php">Buy Now</a>
      <a href="contact-us.php">Contact Us</a>
      <a href="contact-us.php">Corporate Packages</a>
    </div>
  </div>

  <div class="footer-segment">
    <p class="footer-segment-heading"> Legal</p>
    <div class="footer-links">
      <a href="termsandconditions.php">Terms and Conditions</a>
      <a href="privacypolicy.php">Privacy Policy</a>
      
    </div>
  </div>
</div>

  <div class="footer-copyright">
  <div class="language-switcher" Label="Language">Language
        <select id="language-dropdown">
          <option value="en">English</option>
          <option value="kr">한국어</option>
        </select>
      </div>
  </div>


<div class="footer-products">

</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      const languageDropdown = document.getElementById('language-dropdown');

      // Set the initial value based on the current URL
      if (window.location.pathname.includes('/kr')) {
        languageDropdown.value = 'kr';
      } else {
        languageDropdown.value = 'en';
      }

      // Add an event listener to handle language change
      languageDropdown.addEventListener('change', function () {
        const selectedLanguage = languageDropdown.value;

        if (selectedLanguage === 'kr') {
          window.location.href = 'https://headshotai.studio/kr';
        } else if (selectedLanguage === 'en') {
          window.location.href = 'https://headshotai.studio';
        }
      });
    });
  </script>
</footer>