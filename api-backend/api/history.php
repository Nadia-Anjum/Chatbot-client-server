<?php
// Handling Chat History Requests as JSON


session_start();
require_once 'history2.php'; // Include the history file

// Check for the request method (assuming it's a GET request)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the chat history
    $chatHistory = getChatHistory();

    // Send chat history as JSON
    header('Content-Type: application/json');
    echo json_encode($chatHistory);
} else {
    // Handle other request methods if needed
    http_response_code(405); // Method Not Allowed
}
?>