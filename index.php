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
                <p id="tegnTæller">Antal tegn: 0</p>
            </ul>


            <form class="user-input" method="get" action="?">
                <input type="text" name="myInput" for="tekstfelt" id="tekstfelt" placeholder="Type your message...">
                <button type="submit" value="CLICK ME">Send</button>
            </form>
        </div>
    </div>
    <script>
        // Hent inputfeltet og tegntæller-paragraph ved hjælp af querySelector
        const tekstfelt = document.querySelector("#tekstfelt");
        const tegnTæller = document.querySelector("#tegnTæller");

        // Tilføj en event listener til inputfeltet, der lytter efter tastetryk
        tekstfelt.addEventListener("input", opdaterTegnTæller);

        // Funktion til at opdatere tegntælleren
        function opdaterTegnTæller() {
            // Hent længden af tekst i inputfeltet
            const tekstLængde = tekstfelt.value.length;

            // Opdater tekst i tegntæller-paragraphen
            tegnTæller.textContent = `Antal tegn: ${tekstLængde}`;
        }
    </script>




</body>

</html>