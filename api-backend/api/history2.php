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
?>