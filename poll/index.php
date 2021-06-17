<?php




require_once 'config.php';
require_once 'partials/header.php';
if ($_SERVER['REQUEST_URI'] === '/voting/poll/login') {
    require_once 'views/login.php';
} else if ($_SERVER['REQUEST_URI'] === '/voting/poll/register') {
    require_once 'views/register.php';
} else if ($_SERVER['REQUEST_URI'] === '/voting/poll/') {
    require_once 'views/home.php';
}

require_once 'partials/footer.php';
