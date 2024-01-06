<?php
// set app name
define("APP_NAME", "mini_mvc");
// base app url like mini_mvc.test
define("BASE_URL", "http://$_SERVER[HTTP_HOST]");
// __DIR__ get current dir + one step back dir
// its full base directory
define("BASE_DIR", realpath(__DIR__ . "/../"));