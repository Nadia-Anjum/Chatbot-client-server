<?php
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = array(); // Initialize history as an empty array if it doesn't exist
}

function addToChatHistory($userInput, $chatbotResponse)
{
    $_SESSION['history'][] = $userInput;
    $_SESSION['history'][] = $chatbotResponse;
}

function getChatHistory()
{
    return $_SESSION['history'];
}

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
