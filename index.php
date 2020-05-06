<?php

require __DIR__ . '/kirby/bootstrap.php';

echo (new Kirby)->render();


// if ($_SERVER['SERVER_NAME'] === 'https://sabago-bemo.000webhostapp.com/' && $_SERVER['REQUEST_URI'] === '/' ) {
//     echo (new Kirby)->render('blog');
// } else {
//     echo (new Kirby)->render();
// }

