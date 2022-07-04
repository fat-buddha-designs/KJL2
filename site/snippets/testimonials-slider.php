<section class="testimonials">
  <div class="testimonials--wrapper">
    <h3>Client Testimonials</h3>
    <div class="autoplay">
      <?php foreach($keytestimonials as $keytestimonial): ?>
      <div>
          <p><?= $keytestimonial->text() ?></p></div>
      <?php endforeach ?>
    </div>
  </div>
</section>