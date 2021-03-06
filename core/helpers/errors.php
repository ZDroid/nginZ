<?php

/**
 * Errors helper
 *
 * Mendelevium-powered error thrower.
 */

defined('PATH') or exit('No direct script access allowed');

/*
 * Exit status codes
 *
 * These are just core codes. You can add new status codes if you need them.
 *
 * Source: CodeIgniter
 */

define('EXIT_SUCCESS', 0);        // no errors
define('EXIT_ERROR', 1);          // generic error
define('EXIT_CONFIG', 3);         // configuration error
define('EXIT_UNKNOWN_FILE', 4);   // file not found
define('EXIT_UNKNOWN_CLASS', 5);  // unknown class
define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
define('EXIT_USER_INPUT', 7);     // invalid user input
define('EXIT_DATABASE', 8);       // database error
define('EXIT_AUTO_MIN', 9);       // minimal automatically-assigned error code
define('EXIT_AUTO_MAX', 125);     // maximal automatically-assigned error code

/*
 * Error thrower
 *
 * `$msg`           => error message
 * `$header_msg`    => HTTP header message
 * `$header_status` => HTTP header status code
 * `$exit_status`   => exit status code
 */

function throwerr($header_status, $exit_status, $msg, $header_msg = '') {
  global $http_status, $http_version;
  if (!$header_msg) {
    $header_msg = "$http_version $header_status $http_status[$header_status]";
  }

  header($header_msg, $header_status);
  echo $msg;
  exit($exit_status);
}
