<?php
return function($page) {

// fetch from structure
$testimonials = $page->testimonials()->toStructure();

return [
    'testimonials' => $testimonials
];

};