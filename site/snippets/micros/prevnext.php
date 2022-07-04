<section class="paging">
<?php if($page->hasNextListed() || $page->hasPrevListed()): ?>
  <nav>
    <?php if($page->hasNextListed()): ?>
      <a class="next" href="<?= $page->nextListed()->url() ?>" rel="next" title="<?= $page->nextListed()->title()->html() ?>"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M192 127.338v257.324c0 17.818-21.543 26.741-34.142 14.142L29.196 270.142c-7.81-7.81-7.81-20.474 0-28.284l128.662-128.662c12.599-12.6 34.142-3.676 34.142 14.142z" fill="#fff" /></svg> Previous</a>
    <?php else: ?>
      <span></span>
    <?php endif ?>
   <?php if($page->hasPrevListed()): ?>
      <a class="prev" href="<?= $page->prevListed()->url() ?>" rel="prev" title="<?= $page->prevListed()->title()->html() ?>">Next <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" fill="#fff" /></svg></a>
    <?php else: ?>
      <span></span>
    <?php endif ?>
  </nav>
<?php endif ?>
</section>