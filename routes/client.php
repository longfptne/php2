<?php

use User\ontap\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');