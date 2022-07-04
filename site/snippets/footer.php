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
    <a href="<?= html($site->facebookurl()) ?>"
      aria-label="check out the <?= html($site->companyname()) ?> Facebook Account" target="_blank">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px"
        height="20px" viewBox="0 0 20 20" version="1.1">
        <path style=" stroke:none;fill-rule:nonzero;fill:#fff;fill-opacity:1;"
          d="M 19.6875 10 C 19.6875 4.648438 15.351562 0.3125 10 0.3125 C 4.648438 0.3125 0.3125 4.648438 0.3125 10 C 0.3125 14.835938 3.855469 18.84375 8.484375 19.570312 L 8.484375 12.800781 L 6.023438 12.800781 L 6.023438 10 L 8.484375 10 L 8.484375 7.867188 C 8.484375 5.4375 9.929688 4.097656 12.144531 4.097656 C 13.207031 4.097656 14.3125 4.285156 14.3125 4.285156 L 14.3125 6.667969 L 13.09375 6.667969 C 11.890625 6.667969 11.515625 7.414062 11.515625 8.183594 L 11.515625 10 L 14.199219 10 L 13.769531 12.800781 L 11.515625 12.800781 L 11.515625 19.570312 C 16.144531 18.84375 19.6875 14.835938 19.6875 10 Z M 19.6875 10 " />
      </svg>
    </a>
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
    <a href="mailto:&#x6b;&#106;&#108;&#x40;&#x6b;&#106;&#108;&#45;&#x73;&#111;&#108;&#105;&#x63;&#x69;&#116;&#x6f;&#x72;&#115;&#x2e;&#99;&#111;&#x2e;&#117;&#x6b;"
      aria-label="email <?= html($site->companyname()) ?>">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px"
        height="20px" viewBox="0 0 20 20" version="1.1">
        <path style=" stroke:none;fill-rule:nonzero;fill:#fff;fill-opacity:1;"
          d="M 19.054688 0.941406 L 15.117188 0.03125 C 14.542969 -0.101562 13.953125 0.195312 13.71875 0.738281 L 11.902344 4.976562 C 11.6875 5.472656 11.832031 6.058594 12.25 6.402344 L 14.355469 8.125 C 13.027344 10.828125 10.828125 13.03125 8.121094 14.359375 L 6.398438 12.253906 C 6.054688 11.835938 5.46875 11.691406 4.972656 11.90625 L 0.738281 13.722656 C 0.195312 13.957031 -0.101562 14.542969 0.03125 15.117188 L 0.9375 19.050781 C 1.066406 19.609375 1.558594 20 2.128906 20 C 11.980469 20 20 12.023438 20 2.128906 C 20 1.558594 19.609375 1.066406 19.054688 0.941406 Z M 2.152344 18.75 L 1.253906 14.859375 L 5.449219 13.0625 L 7.773438 15.90625 C 11.820312 14.007812 14.011719 11.808594 15.902344 7.777344 L 13.058594 5.453125 L 14.855469 1.257812 L 18.746094 2.15625 C 18.738281 11.316406 11.3125 18.738281 2.152344 18.75 Z M 2.152344 18.75 " />
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
    <p>Copyright <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        width="20px" height="20px" viewBox="0 0 20 20" version="1.1">
        <path style=" stroke:none;fill-rule:nonzero;fill:#fff;fill-opacity:1;"
          d="M 10 0 C 4.476562 0 0 4.476562 0 10 C 0 15.523438 4.476562 20 10 20 C 15.523438 20 20 15.523438 20 10 C 20 4.476562 15.523438 0 10 0 Z M 10 18.125 C 5.519531 18.125 1.875 14.480469 1.875 10 C 1.875 5.519531 5.519531 1.875 10 1.875 C 14.480469 1.875 18.125 5.519531 18.125 10 C 18.125 14.480469 14.480469 18.125 10 18.125 Z M 9.964844 6.875 C 10.789062 6.875 11.5625 7.199219 12.144531 7.789062 C 12.511719 8.152344 13.105469 8.160156 13.472656 7.792969 C 13.839844 7.429688 13.84375 6.835938 13.480469 6.46875 C 12.542969 5.519531 11.292969 5 9.964844 5 C 8.636719 5 7.390625 5.519531 6.453125 6.46875 C 4.519531 8.414062 4.519531 11.585938 6.453125 13.535156 C 7.390625 14.480469 8.636719 15 9.964844 15 C 11.292969 15 12.542969 14.480469 13.480469 13.535156 C 13.84375 13.164062 13.839844 12.570312 13.472656 12.207031 C 13.105469 11.84375 12.511719 11.847656 12.144531 12.214844 C 11.5625 12.800781 10.789062 13.125 9.964844 13.125 C 9.140625 13.125 8.367188 12.800781 7.78125 12.214844 C 6.574219 10.992188 6.574219 9.007812 7.78125 7.789062 C 8.367188 7.199219 9.140625 6.875 9.964844 6.875 Z M 9.964844 6.875 " />
      </svg>
      <script defer>
        document.write(new Date().getFullYear())
      </script>
      <?= html($site->companyname()) ?> - Design By
      <a href="https://www.fatbuddhadesigns.co.uk" title="Fat Buddha Designs, Designers of this website"
        aria-label="Fat Buddha Designs, Designers of this website"> Fat Buddha Designs</a>
    </p>
  </div>
  <div>
    <ul>
      <li><a target="_blank" aria-label="Panel" href="<?= url() ?>/panel">Panel</a></li>
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


<a href="#page-top" class="scrollup" aria-label="scroll to the top of this page"
  title="scroll to the top of this page"><svg class="icon" xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="27px" viewBox="0 0 20 26" version="1.1">
    <path style=" stroke:none;fill-rule:nonzero;fill:#fff;fill-opacity:1;"
      d="M 1.222656 14.953125 L 9.140625 7.6875 C 9.378906 7.425781 9.691406 7.3125 10 7.3125 C 10.308594 7.3125 10.617188 7.421875 10.859375 7.644531 L 18.777344 14.914062 C 19.277344 15.375 19.296875 16.148438 18.824219 16.636719 C 18.351562 17.128906 17.554688 17.144531 17.058594 16.683594 L 10 10.164062 L 2.941406 16.683594 C 2.445312 17.144531 1.652344 17.128906 1.175781 16.636719 C 0.703125 16.195312 0.722656 15.421875 1.222656 14.953125 Z M 1.222656 14.953125 " />
  </svg></a>


<div id="cookies-eu-banner" style="display: none;">
  <div class="layout--wrapper">
    <div class="text--wrapper">
      <div><?= $site->cookie_text()->kt() ?></div>
    </div>
    <div class="button--wrapper">
      <button id="cookies-eu-reject"><?= $site->cookie_reject() ?></button>
      <button id="cookies-eu-accept"><?= $site->cookie_accept() ?></button>
    </div>
  </div>
</div>

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