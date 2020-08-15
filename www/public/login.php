<?php

require_once '../vendor/autoload.php';
//require_once '../config/eloquent.php';
//require_once '../src/Model.php';
require_once '../config/blade.php';

echo $blade->make('login/login')->render();