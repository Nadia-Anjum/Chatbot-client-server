<?php
session_start();

// Initialize user input and chatbot response
$myInput = isset($_SESSION['myInput']) ? $_SESSION['myInput'] : '';
$chatbotResponse = "";

if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = array(); // Initialiser history som en tom array, hvis det ikke eksisterer
}

if (isset($_GET['myInput'])) {
    $myInput = $_GET['myInput'];


    if (strpos(strtolower($myInput), "hello") !== false) {
        $chatbotResponse = "Hello, what can I help you with? ";
    } elseif (strpos(strtolower($myInput), "hej") !== false) {
        $chatbotResponse = "Hej, hvad kan jeg hjælpe dig med?";
    } else {
        $chatbotResponse = "I don't understand";
    }

    // Append user input and chatbot response as new <li> elements
    $_SESSION['history'][] =  $myInput;
    $_SESSION['history'][] = $chatbotResponse;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="chat-container">
        <div class="chatbot">
            <header>
                <h2>Chatbot</h2>
            </header>

            <ul class="chatbox">
                <li class="message received">Hello, this is Chatbot</li>

                <?php

                $count = count($_SESSION['history']);

                // Loop 
                for ($i = 0; $i < $count; $i++) {
                    // Tjek om tallet er lige eller ulige
                    if ($i % 2 === 0) {
                        // Lige tal
                        echo '<li class="message sent">' . $_SESSION['history'][$i] . '</li>';
                    } else {
                        // Ulige tal
                        echo '<li class="message received">' . $_SESSION['history'][$i] . '</li>';
                    }
                }
                ?>

                <p id="CharacterCount">Character count: 0</p>
            </ul>


            <form class="user-input" method="get" action="">
                <input type="text" name="myInput" id="inputfield" placeholder="Type your message..." oninvalid="alert('You must fill out the message!');" required>

                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <script>
        // Hent inputfeltet og CharacterCount-paragraph ved hjælp af querySelector
        const inputfield = document.querySelector("#inputfield");
        const CharacterCount = document.querySelector("#CharacterCount");

        // Tilføj en event listener til inputfeltet, der lytter efter tastetryk
        inputfield.addEventListener("input", opdaterCharacterCount);

        // Funktion til at opdatere CharacterCounten
        function opdaterCharacterCount() {
            // Hent længden af tekst i inputfeltet
            const textLength = inputfield.value.length;

            // Opdater tekst i CharacterCount-paragraphen
            CharacterCount.textContent = `Character count: ${textLength}`;
        }
    </script>



</body>

</html>