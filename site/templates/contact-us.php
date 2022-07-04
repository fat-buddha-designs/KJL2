<?php snippet('head') ?>

<?php snippet('theme-switcher') ?>

<?php snippet('navigation') ?>

<?php snippet('header') ?>

<main id="main" tab-index="-1">
  <section class="contact">
    <h1><?= $page->title()->html() ?></h1>
    <div class="contact--block">
      <div class="contact--left">
        <?php snippet('micros/address') ?>
        <p><a aria-label="Get directions to KJL Solicitors" href="/find-us">Get directions to KJL Solicitors</a></p>
      </div>
      <div class="contact--right">
      <?php if($success): ?>
        <div class="alert success">
            <p><?= $success ?></p>
        </div>
        <?php else: ?>
        <?php if (isset($alert['error'])): ?>
            <div><?= $alert['error'] ?></div>
        <?php endif ?>
        <form method="post" action="<?= $page->url() ?>">
          <div class="visually--hidden">
            <label for="website">Website <abbr title="required">*</abbr></label>
            <input type="website" class="full--width" id="website" name="website">
          </div>
          <div class="field">
            <label for="name">Name <abbr title="required">*</abbr>
            </label>
            <input type="text" id="name" class="full--width" name="name" value="<?= $data['name'] ?? '' ?>" required>
            <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
          </div>
          <div class="field">
            <label for="email">Email <abbr title="required">*</abbr>
            </label>
            <input type="email" id="email" class="full--width" name="email" value="<?= $data['email'] ?? '' ?>"
              required>
            <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
          </div>
          <div class="field">
            <label for="landline">Landline</label>
            <input type="tel" id="landline" class="full--width" name="landline" value="<?= $data['landline'] ?? '' ?>">
            <?= isset($alert['landline']) ? '<span class="alert error">' . html($alert['landline']) . '</span>' : '' ?>
          </div>
          <div class="field">
            <label for="mobile">Mobile</label>
            <input type="tel" id="mobile" class="full--width" name="mobile" value="<?= $data['mobile'] ?? '' ?>">
            <?= isset($alert['mobile']) ? '<span class="alert error">' . html($alert['mobile']) . '</span>' : '' ?>
          </div>
          <div class="field">
            <label for="text">Text <abbr title="required">*</abbr></label>
            <textarea rows="10" id="text" class="full--width" name="text" required>
            <?= $data['text']?? '' ?>
            </textarea>
            <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
          </div>
          <div class="policy--notice">
            <p>By submitting this form you agree to the terms laid out in our <a href="/policies">privacy-policy</a>.
            </p>
          </div>
          <input id="submit" class="full--width" type="submit" name="submit" value="Submit">
        </form>
        <?php endif ?>
      </div>
    </div>
  </section>
</main>

<?php snippet('footer') ?>
