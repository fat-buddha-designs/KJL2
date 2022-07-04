<?php
return function($page) {

// fetch from structure
$keytestimonials = $page->keytestimonials()->toStructure();

return [
    'keytestimonials' => $keytestimonials
];

};