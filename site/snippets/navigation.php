<?php if($site->mainnavigation()->isNotEmpty()): ?>
<div class="top-bar-container">
  <div class="top-bar-title">
    <span data-responsive-toggle="responsive-menu" data-hide-for="large">
      <button class="menu-icon" type="button" data-toggle></button>
    </span>
  </div>
  <div id="responsive-menu">
    <div class="top-bar">
      <ul class="dropdown vertical large-horizontal menu" data-responsive-menu="drilldown medium-dropdown"
        data-auto-height="true" data-animate-height="true">
        <?php foreach($site->mainnavigation()->toStructure() as $navigation): ?>
        <li <?php e($navigation->url() == $page->url(), 'class="active"') ?>><a aria-label="<?php echo $navigation->text() ?>"
            href="<?php echo $navigation->url(); ?>"><?php echo $navigation->text() ?></a>
          <?php if($navigation->children()->isNotEmpty()): ?>
          <ul class="menu vertical nested">
            <?php foreach($navigation->children()->toStructure() as $children): ?>
            <li <?php e($children->url() == $page->url(), 'class="active"') ?>><a aria-label="<?php echo $children->text() ?>"
                href="<?php echo $children->url() ?>"><?php echo $children->text() ?></a>
              <?php if($children->children()->isNotEmpty()): ?>
              <ul class="menu vertical nested">
                <?php foreach($children->children()->toStructure() as $subchildren): ?>
                <li <?php e($subchildren->url() == $page->url(), 'class="active"') ?>><a aria-label="<?php echo $subchildren->text() ?>"
                    href="<?php echo $subchildren->url() ?>"><?php echo $subchildren->text() ?></a>
                </li>
                <?php endforeach ?>
              </ul>
              <?php endif ?>
            </li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
        </li>
        <?php endforeach ?>
        <li class="search"><a href="/search">Search
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px"
              height="20px" viewBox="0 0 20 20" version="1.1">
              <path style=" stroke:none;fill-rule:nonzero;fill:#666;fill-opacity:1;"
                d="M 19.691406 18.398438 L 14.457031 13.164062 C 15.589844 11.777344 16.214844 10.03125 16.214844 8.125 C 16.214844 3.636719 12.578125 0 8.089844 0 C 3.601562 0 0 3.636719 0 8.125 C 0 12.613281 3.636719 16.25 8.089844 16.25 C 9.996094 16.25 11.742188 15.589844 13.128906 14.492188 L 18.363281 19.726562 C 18.582031 19.910156 18.824219 20 19.0625 20 C 19.300781 20 19.542969 19.910156 19.726562 19.726562 C 20.089844 19.359375 20.089844 18.765625 19.691406 18.398438 Z M 1.875 8.125 C 1.875 4.679688 4.679688 1.875 8.125 1.875 C 11.570312 1.875 14.375 4.679688 14.375 8.125 C 14.375 11.570312 11.570312 14.375 8.125 14.375 C 4.679688 14.375 1.875 11.570312 1.875 8.125 Z M 1.875 8.125 " />
            </svg></a></li>
      </ul>
    </div>
  </div>
</div>
<?php endif ?>