<?php snippet('head') ?>

<?php snippet('theme-switcher') ?>

<?php snippet('navigation') ?>

<?php snippet('header') ?>

<main id="main">
    <section>
        <h1><?= $page->pageheadline()->or($page->title())->html() ?></h1>
            <iframe width="1200" height="350" id="gmap_canvas"
                src="https://maps.google.com/maps?q=NR13%204AA&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0"
                scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://getasearch.com/nordvpn-coupon/"></a><br>
            <a href="https://www.embedgooglemap.net"></a>
            <form class="directions" action="http://maps.google.com/maps" method="get" target="_blank">
                <label for="saddr" class="visually--hidden">Enter your location, a Postcode works best</label>
                <input type="text" name="saddr" placeholder="Enter your location">
                <input type="hidden" name="daddr" value="Blofield Chambers, The Street, Blofield, NR13 4AA)">
                <input type="submit" value="Get directions to KJL Solicitors">
            </form>
        </section>
</main>

<?php snippet('footer') ?>