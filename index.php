<?php
session_start();

if (!isset($_SESSION['talhistory'])) {
    $_SESSION['talhistory'] = "";
}

$infoQuestion = "What is the capital city of Denmark?";
$infoAnswer = "The capital city of Denmark is Copenhagen.";

$infoQuestion2 = "What is the official language in Denmark?";
$infoAnswer2 = "The official language in Denmark is Danish.";

$infoQuestion3 = "What is Denmark famous for?";
$infoAnswer3 = "Denmark is famous for the little mermaid.";

$_SESSION['talhistory'] .= " " . $infoQuestion;

echo $infoQuestion;
echo "<br>";
echo $infoAnswer;
echo "<br>";
echo $infoQuestion2;
echo "<br>";
echo $infoAnswer2;
echo "<br>";
echo $infoQuestion3;
echo "<br>";
echo $infoAnswer3;
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

                <li class="message sent">
                    <?php
                    $myInput = isset($_GET['myInput']) ? $_GET['myInput'] : '';
                    echo $myInput;
                    ?>
                </li>


                <li class="message received">
                    <?php

                    if (strpos(strtolower($myInput), "hello") !== false) {
                        echo "Hello, what can i help you with?";
                    } elseif (strpos(strtolower($myInput), "hej") !== false) {
                        echo "Hej, hvad kan jeg hjælpe dig med?";
                    } else {
                        echo "I don't understand";
                    }

                    ?>
                </li>
                <p id="CharacterCount">Character count: 0</p>
            </ul>


            <form class="user-input" method="get" action="?">
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