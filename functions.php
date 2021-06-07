<?php
// Load composer dependencies.
require_once 'vendor/autoload.php';

// Load App class.
require_once 'app/src/App.php';

// Bootstrap Application.
\App::make()->bootstrap( require __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config.php' );
