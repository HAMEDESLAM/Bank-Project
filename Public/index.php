<?php

// public/index.php

// Check if the request is for an API endpoint
if (strpos($_SERVER['REQUEST_URI'], '/user/') === 0) {
    require '../src/routes.php';
    exit;
}
else if (strpos($_SERVER['REQUEST_URI'], '/database') === 0) {
    require 'Database Show.php';
    exit;
}
else if (strpos($_SERVER['REQUEST_URI'], '/db/') === 0) {
    require '../src/dbShow.php';
    exit;
}
require 'Home.php';