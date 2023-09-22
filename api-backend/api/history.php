<?php
session_start();

// Check if chat history exists in the session
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = array(); // Initialize history as an empty array if it doesn't exist
}

// Function to add a message to the chat history
function addToChatHistory($userInput, $chatbotResponse) {
    $_SESSION['history'][] = $userInput;
    $_SESSION['history'][] = $chatbotResponse;
}

// Function to get the chat history as an array
function getChatHistory() {
    return $_SESSION['history'];
}
?>
