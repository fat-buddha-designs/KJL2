<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "<?php echo html($site->url()) ?>",
  "name": "<?= html($site->companyname()) ?>",
   "author": {
      "@type": "Person",
      "name": "<?= html($site->author()) ?>"
    },
  "description": "<?= $page->description()->html() ?>",
  "publisher": "<?= html($site->author()) ?>"
}
</script>
<script type='application/ld+json'>
 {
  "@context": "http://www.schema.org",
  "@type": "LocalBusiness",
  "name": "<?= html($site->companyname()) ?>",
  "url": "<?php echo html($site->url()) ?>",
  <?php if($image = $site->companylogo()->toFile()): ?>
  "logo": "<?= $image->url() ?>",
  <?php endif ?>
  <?php if($image = $site->companyimage()->toFile()): ?>
"image": "<?= $image->url() ?>",
  <?php endif ?>
  "description": "<?= $page->description()->html() ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= html($site->street()) ?>, <?= html($site->village()) ?>",
    "addressLocality": "<?= html($site->city()) ?>",
    "addressRegion": "<?= html($site->county()) ?>",
    "postalCode": "<?= html($site->postcode()) ?>",
    "addressCountry": "United Kingdom"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "<?= html($site->lat()) ?>",
    "longitude": "<?= html($site->long()) ?>"
  },
  "hasMap": "<?= html($site->hasmap()) ?>",
  "telephone": "<?= html($site->inter()) ?>",
  "email": "<?= html($site->email()) ?>",
  "openingHours":"<?= html($site->open()) ?>",
  "sameAs" : [ <?= html($site->sameas()) ?> ],
  "priceRange": "£<?= html($site->pricerange()) ?>"
}
</script>