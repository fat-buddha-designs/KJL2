<footer>
  <div>
    <?php if($site->footernavigation()->isNotEmpty()): ?>
    <ul>
      <?php foreach($site->footernavigation()->toStructure() as $navigation): ?>
      <li>
        <a href="<?php echo $navigation->url(); ?>">
          <?php echo $navigation->text() ?>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
    <?php endif ?>
  </div>

  <div>
    <?php if($site->secondfooternavigation()->isNotEmpty()): ?>
    <ul>
      <?php foreach($site->secondfooternavigation()->toStructure() as $navigation): ?>
      <li>
        <a href="<?php echo $navigation->url(); ?>">
          <?php echo $navigation->text() ?>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
    <?php endif ?>
  </div>

  <div>
    <?php snippet('micros/address') ?>
  </div>

  <div class="social--links">
    <a href="<?= html($site->twitterurl()) ?>" aria-label="check out the <?= html($site->companyname()) ?> Twitter feed"
      target="_blank">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px"
        height="20px" viewBox="0 0 20 20" version="1.1">
        <path style=" stroke:none;fill-rule:nonzero;fill:#fff;fill-opacity:1;"
          d="M 17.945312 5.925781 C 17.957031 6.105469 17.957031 6.28125 17.957031 6.460938 C 17.957031 11.878906 13.832031 18.121094 6.292969 18.121094 C 3.972656 18.121094 1.816406 17.449219 0 16.28125 C 0.328125 16.320312 0.648438 16.332031 0.988281 16.332031 C 2.90625 16.332031 4.671875 15.683594 6.078125 14.582031 C 4.277344 14.542969 2.765625 13.363281 2.246094 11.738281 C 2.5 11.777344 2.753906 11.800781 3.019531 11.800781 C 3.386719 11.800781 3.757812 11.75 4.097656 11.664062 C 2.222656 11.28125 0.8125 9.632812 0.8125 7.640625 L 0.8125 7.589844 C 1.359375 7.894531 1.992188 8.082031 2.664062 8.109375 C 1.5625 7.375 0.835938 6.117188 0.835938 4.695312 C 0.835938 3.933594 1.039062 3.234375 1.394531 2.625 C 3.414062 5.113281 6.445312 6.738281 9.847656 6.917969 C 9.785156 6.613281 9.746094 6.292969 9.746094 5.976562 C 9.746094 3.71875 11.574219 1.878906 13.84375 1.878906 C 15.023438 1.878906 16.089844 2.375 16.839844 3.171875 C 17.765625 2.996094 18.65625 2.652344 19.441406 2.183594 C 19.136719 3.132812 18.488281 3.933594 17.640625 4.441406 C 18.464844 4.351562 19.265625 4.125 20 3.808594 C 19.441406 4.621094 18.742188 5.34375 17.945312 5.925781 Z M 17.945312 5.925781 " />
      </svg>
    </a>
    <a href="<?= html($site->linkedinurl()) ?>"
      aria-label="check out the <?= html($site->companyname()) ?> LinkedIn feed" target="_blank">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px"
        height="23px" viewBox="0 0 20 22" version="1.1">
        <path style=" stroke:none;fill-rule:nonzero;fill:#fff;fill-opacity:1;"
          d="M 18.570312 1.375 L 1.425781 1.375 C 0.636719 1.375 0 2 0 2.761719 L 0 19.238281 C 0 20 0.636719 20.625 1.425781 20.625 L 18.570312 20.625 C 19.355469 20.625 20 20 20 19.238281 L 20 2.761719 C 20 2 19.355469 1.375 18.570312 1.375 Z M 6.042969 17.875 L 3.082031 17.875 L 3.082031 8.6875 L 6.050781 8.6875 L 6.050781 17.875 Z M 4.5625 7.433594 C 3.613281 7.433594 2.84375 6.691406 2.84375 5.78125 C 2.84375 4.867188 3.613281 4.125 4.5625 4.125 C 5.507812 4.125 6.28125 4.867188 6.28125 5.78125 C 6.28125 6.695312 5.511719 7.433594 4.5625 7.433594 Z M 17.15625 17.875 L 14.191406 17.875 L 14.191406 13.40625 C 14.191406 12.339844 14.167969 10.96875 12.652344 10.96875 C 11.105469 10.96875 10.871094 12.128906 10.871094 13.328125 L 10.871094 17.875 L 7.90625 17.875 L 7.90625 8.6875 L 10.75 8.6875 L 10.75 9.941406 L 10.789062 9.941406 C 11.1875 9.222656 12.15625 8.460938 13.597656 8.460938 C 16.597656 8.460938 17.15625 10.363281 17.15625 12.839844 Z M 17.15625 17.875 " />
      </svg>
    </a>
  </div>

  <div class="yoshki">
    <script type="text/javascript" src="https://cdn.yoshki.com/yoshki-library.js"></script>
    <img src="https://cdn.yoshki.com/SRA/EnglishColour/275/0/Default.png" class="badgenopopup">
  </div>

</footer>


<section class="copyright">
  <div>
    <p>Copyright <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM176 256c0 44.2 35.8 80 80 80c28.7 0 53.8-15.1 68-37.8l40.8 25.4C342.2 359.8 301.9 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c45.9 0 86.2 24.2 108.7 60.5L324 213.8c-14.2-22.8-39.3-37.8-68-37.8c-44.2 0-80 35.8-80 80z"/></svg>
    <script defer>document.write(new Date().getFullYear())</script>
    <?= html($site->companyname()) ?> - Website by <a href="https://www.fatbuddhadesigns.co.uk" title="Fat Buddha Designs, Designers of this website"
        aria-label="Fat Buddha Designs, Designers of this website"> Fat Buddha Designs</a></p>
  </div>
  <div>
    <ul>
      <li><a target="_blank" aria-label="Panel" href="<?= url() ?>/panel">Admin</a></li>
      <li><a aria-label="Policies" href="<?= url() ?>/policies">Policies</a></li>
      <li><a aria-label="Sitemap" href="<?= url() ?>/sitemaps">Sitemap</a></li>
      <li><a aria-label="Terms Of Use" href="<?= url() ?>/terms-of-use">Terms Of Use</a></li>
    </ul>
  </div>
  <div class="image--grid">
    <picture>
      <source class="lazy" srcset="/assets/img/Supporting_CRUK_Logo.png" alt="Cancer Research Uk Logo">
      <source class="lazy" srcset="/assets/img/Supporting_CRUK_Logo.png" alt="Cancer Research Uk Logo">
      <img class="lazy" srcset="../../assets/img/1x1.gif" data-src="/assets/img/Supporting_CRUK_Logo.png"
        alt="Cancer Research Uk Logo">
    </picture>
    <picture>
      <source class="lazy" srcset="/assets/img/accred-civil-and-commercial-mediation-logo.jpg" type="image/webp"
        alt="Law society mediation quality Logo">
      <source class="lazy" srcset="/assets/img/accred-civil-and-commercial-mediation-logo.jpg" type="image/jpeg"
        alt="Law society mediation quality Logo">
      <img class="lazy" srcset="../../assets/img/1x1.gif"
        data-src="/assets/img/accred-civil-and-commercial-mediation-logo.jpg" alt="Law society mediation quality Logo">
    </picture>
    <picture>
      <source class="lazy" srcset="/assets/img/accred-conveyancing-quality-logo.jpg" type="image/webp"
        alt="Law society conveyancing quality Logo">
      <source class="lazy" srcset="/assets/img/accred-conveyancing-quality-logo.jpg"
        alt="Law society conveyancing quality Logo">
      <img class="lazy" srcset="../../assets/img/1x1.gif" data-src="/assets/img/accred-conveyancing-quality-logo.jpg"
        alt="Law society conveyancing quality Logo">
    </picture>
  </div>
</section>


<a href="#page-top" class="scrollup" aria-label="scroll to the top of this page"  title="scroll to the top of this page"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 114.7l22.6 22.6 160 160L429.3 320 384 365.3l-22.6-22.6L224 205.3 86.6 342.6 64 365.3 18.7 320l22.6-22.6 160-160L224 114.7z"/></svg></a>


<?php snippet('cookie-modal', [
    'assets' => true,
    'showOnFirst' => true,
    'features' => [
      'analytics' => 'Analytics',
    ],
]) ?>

<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js"
  integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?= vite()->js() ?>
<script>
  $(document).foundation();


  $('.autoplay').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 10000,
    dots: false,
    infinite: true,
  });
</script>
</body>

</html>