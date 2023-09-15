<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Fetch Example</title>
</head>

<body>
    <h1>Chatbot Fetch Example</h1>

    <script>
        // Fetch the "chat" endpoint
        fetch('chat.php')
            .then(response => response.json())
            .then(data => {
                // Print the response to the console
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    </script>
</body>

</html>