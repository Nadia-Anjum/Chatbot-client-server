
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
                echo $_GET['myInput']; } ?>
             </li>

            <li class="message received">
                <?php if($myInput == "What can you do?"){
                echo "I can answer your questions";
                } elseif ($myInput == "How old are you?") {
                echo "I don't have an age";
                } else echo "I don't understand";
                ?>
        </li>

        </ul>
        
        <form class="user-input" method="get" action="?">
            <input type="text" name="myInput" placeholder="Type your message...">
            <button type="submit" value="CLICK ME">Send</button>
        </form>
    </div>
</div>


</body>
</html>
