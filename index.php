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
                <li class="message received">Hello, how can i help you?</li>

                <li class="message sent">
                    <?php $myInput = $_GET['myInput']; {
                        echo $_GET['myInput'];
                    } ?>
                </li>

                <li class="message received">
                    <?php if ($myInput == "What can you do?") {
                        echo "I can answer your questions";
                    } elseif ($myInput == "How old are you?") {
                        echo "I don't have an age";
                    } elseif ($myInput == "Hvor gammel er du?") {
                        echo "Jeg har ikke en alder";
                    } elseif ($myInput == "Hello") {
                        echo "Hello Human";
                    } elseif ($myInput == "Who am i?") {
                        echo "I don't know who you are";
                    } else echo "I don't understand";

                    ?>
                </li>
                <p id="CharacterCount">Character count: 0</p>
            </ul>


            <form class="user-input" method="get" action="?">
                <input type="text" name="myInput" for="inputfield2" id="inputfield" placeholder="Type your message...">

                <button type="submit" value="CLICK ME">Send</button>
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