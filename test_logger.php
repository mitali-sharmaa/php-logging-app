<?php

require 'vendor/autoload.php';

use App\AppLogger; // Use the correct namespace

// Create a logger instance
$logger = new AppLogger();

// Log some messages
$logger->logInfo('This is an info message.');
$logger->logError('This is an error message.');

echo "Logging complete. Check the logs for messages.";