<?php

// We catch and save all ajax requests in the error log file
// Great for debugging and monitoring ajax requests


// Function to check if the request is an AJAX request
function is_ajax_request() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

// Function to log the request
function log_ajax_request() {
  if (is_ajax_request()) {
    // Collect request details
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $requestUri = $_SERVER['REQUEST_URI'];
    $requestData = json_encode($_POST); // Assuming POST data for simplicity; adjust as needed
    $requestHeaders = json_encode(getallheaders()); // Get all request headers

    // Generate a unique identifier for the AJAX call
    $ajaxCallId = uniqid('ajax_', true);

    // Construct log message
    $logMessage = "AJAX Request ID: $ajaxCallId - Method: $requestMethod, URI: $requestUri, Data: $requestData, Headers: $requestHeaders";

    // Log to error log
    error_log($logMessage);
  }
}

// Call the function to log the AJAX request
log_ajax_request();