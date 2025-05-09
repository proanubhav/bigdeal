<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WMBW4X6S" height="0" width="0"
    style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="header">
  <div class="top_header">
    <div class="container">
      <ul>
        <li><a href="https://www.instagram.com/bigdealsupermart/" target="_blank" title="Instagram"><img
              src="assets/img/instagram.svg" alt="instagram"></li>
        <li><a href="https://www.facebook.com/Bigdealsupermarket/" target="_blank" title="Facebook"><img
              src="assets/img/facebook-white.svg" alt="facebook"></li>
        <li><a href="mailto:connect@bigdealsupermart.com">
            <img class="d-mobile email_svg" src="assets/img/email.svg" alt="email">
            <span class="email-text">connect@bigdealsupermart.com<span>
          </a></li>
        <li><a href="tel:+91-9891750328">(+91) - 9891750328</a></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar_two">
      <div class="mobile_logo">
        <div class="logo">
          <a href="/">
            <img src="assets/img/bigdeal-supermart-logo.webp" alt="Bigdeal Supermart Franchise logo">
          </a>
        </div>
      </div>
      <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse navbar_collapse" id="navbarSupportedContent">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="logo">
              <a href="/">
                <img src="assets/img/bigdeal-supermart-logo.webp" alt="Bigdeal Supermart Franchise logo">
              </a>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-8 pr-0">
            <ul class="navbar-nav mr-auto navbar_two_nav float-right">
              <li class="nav-item">
                <a class="nav-link" href="https://www.bigdealsupermart.com/">Home</a>
              </li>
              <li class="dropdown mega-dropdown">
                <a class="nav-link" href="about"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact"> Contact Us </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="calculator">Calculator</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.bigdealsupermart.com/blog/">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="start-your-franchise">Apply Franchise</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-nav" href="https://www.bigdealsupermart.com/assets/big-deal-brochure.pdf" target="_blank">Download Brochure</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const toggler = document.querySelector('.navbar-toggler');
      const collapseElement = document.getElementById('navbarSupportedContent');

      toggler.addEventListener('click', (event) => {
        event.stopPropagation(); // Prevent event from bubbling up
        collapseElement.classList.toggle('show');
      });

      document.addEventListener('click', (event) => {
        if (!collapseElement.contains(event.target) && collapseElement.classList.contains('show')) {
          collapseElement.classList.remove('show'); // Close menu if clicking outside
        }
      });
    });
  </script>
</header>