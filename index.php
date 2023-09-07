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
                    <?php $myInput = $_GET['myInput']; {
                        echo $_GET['myInput'];
                    } ?>
                </li>

                <li class="message received">
                    <?php

                    if (strpos(strtolower($myInput), "hello") !== false) {
                        echo "Hello, what can i help you with?";
                    } elseif (strpos(strtolower($myInput), "hej") !== false) {
                        echo "Hej, hvad kan jeg hjælpe dig med?";
                    } elseif ($myInput == "What is the Capital city of Denmark?") {
                        echo "The capital city of Denmark is Copenhagen.";
                    } else {
                        echo "I don't understand";
                    }

                    ?>
                </li>
                <p id="CharacterCount">Character count: 0</p>
            </ul>


            <form class="user-input" method="get" action="?">
                <input type="text" name="myInput" for="inputfield2" id="inputfield" placeholder="Type your message..." oninvalid="alert('You must fill out the message!');" required>

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