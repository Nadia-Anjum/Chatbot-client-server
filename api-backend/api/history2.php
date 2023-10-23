<?php 
// Managing Chat History in Session Variables.


// Check if the 'history' session variable exists
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = array(); // Initialize history as an empty array if it doesn't exist
}

// Add user input and chatbot response to the chat history
function addToChatHistory($userInput, $chatbotResponse)
{
    $_SESSION['history'][] = $userInput;
    $_SESSION['history'][] = $chatbotResponse;
}

// Retrieve the entire chat history from the session
function getChatHistory()
{
    return $_SESSION['history'];
}
?>