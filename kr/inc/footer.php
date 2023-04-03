<footer>
  <div class="footer-wrapper">
  <div class="footer-logo">  
    <a href="/"> <img src="images/footer-logo.png" alt="Home Page"></a>
  </div>
  
<div class="footer-text">
  <p>전문적이고 자신감 넘치는 비즈니스 헤드샷을 만드세요. 지금 인공지능을 이용하여 스튜디오 품질의 헤드샷을 만들어보세요.</p>
</div>

<div class="footer-links-container">
  <div class="footer-segment">
    <p class="footer-segment-heading"> 링크</p>
    <div class="footer-links">
      <a href="checkout.php">지금 구매</a>
      <a href="contact-us.php">문의하기</a>
      <a href="contact-us.php">기업용 패키지</a>
    </div>
  </div>

  <div class="footer-segment">
    <p class="footer-segment-heading"> 법률</p>
    <div class="footer-links">
      <a href="termsandconditions.php">이용 약관</a>
      <a href="privacypolicy.php">개인정보 처리방침</a>
    </div>
  </div>
</div>

  <div class="footer-copyright">
  <div class="language-switcher">
        <select id="language-dropdown"> 언어
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