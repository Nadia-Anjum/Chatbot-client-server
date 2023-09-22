<?php
session_start();
require_once 'history.php'; // Include the history file

// Initialize user input and chatbot response
$myInput = isset($_POST['myInput']) ? $_POST['myInput'] : '';
$chatbotResponse = "";

if (!empty($myInput)) {
    // Check for greetings
    if (stripos($myInput, "hello") !== false) {
        $chatbotResponse = "Hello, what can I help you with?";
    } elseif (stripos($myInput, "hej") !== false) {
        $chatbotResponse = "Hej, hvad kan jeg hjælpe dig med?";
    } else {
        // Check for Copenhagen facts
        $copenhagenFacts = array(
            "hovedstad" => "København er hovedstaden i Danmark.",
            "indbygger" => "København har en befolkning på cirka 600.000 mennesker.",
            "kendt" => "En berømt vartegn i Danmark er Den Lille Havfrue.",
            "sprog" => "Det officielle sprog i Danmark er dansk.",
            "mad" => "København er kendt for sin lækre madscene og nordisk køkken. Det man spiser tit kan være smørrebrød."
        );

        // Loop through facts and generate a response if there is a match
        foreach ($copenhagenFacts as $keyword => $response) {
            if (stripos($myInput, $keyword) !== false) {
                $chatbotResponse = $response;
                break; // Stop the loop when a match is found
            }
        }

        if (empty($chatbotResponse)) {
            $chatbotResponse = "I don't have information on that topic."; // Default response
        }
    }

    // Add user input and chatbot response to the chat history
    addToChatHistory($myInput, $chatbotResponse);
}

// Return chatbot response as JSON
$responseData = [
    'response' => $chatbotResponse,
    'history' => getChatHistory() // Get the chat history from the history file
];

header('Content-Type: application/json');
echo json_encode($responseData);
?>
