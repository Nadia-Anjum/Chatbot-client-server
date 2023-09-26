document.addEventListener("DOMContentLoaded", function () {
    const inputfield = document.querySelector("#inputfield");
    const chatbox = document.querySelector(".chatbox");

    // Function to load chat history from the server
    function loadChatHistory() {
        fetch('api-backend/api/chatbot-backend.php', {
            method: 'GET',
        })
            .then(response => response.json())
            .then(data => {
                // Display chat history on the page one message at a time
                displayChatHistory(data.history);
            })
            .catch(error => console.error('Fejl ved indlæsning af chat historie:', error));
    }

    // Load chat history when the page loads
    loadChatHistory();

    document.querySelector("form.user-input").addEventListener("submit", function (e) {
        e.preventDefault();

        const userInput = inputfield.value.trim();
        if (userInput) {
            // Send user input to the server
            fetch('api-backend/api/chatbot-backend.php', {
                method: 'POST',
                body: new URLSearchParams({ myInput: userInput }),
            })
                .then(response => response.json())
                .then(data => {
                    // Append user's input to chatbox
                    appendMessage(userInput, 'sent');
                    // Wait for a short delay before appending chatbot's response
                    setTimeout(() => {
                        appendMessage(data.response, 'received');
                        // Scroll chatbox to the bottom to show the latest message
                        chatbox.scrollTop = chatbox.scrollHeight;
                    }, 500); // Adjust the delay as needed
                    inputfield.value = '';
                })
                .catch(error => console.error('Fejl ved chatbot-forespørgsel:', error));
        }
    });

    // Function to display chat history one message at a time
    function displayChatHistory(history) {
        let index = 0;

        function displayNextMessage() {
            if (index < history.length) {
                const message = history[index];
                const messageType = index % 2 === 0 ? 'sent' : 'received';
                appendMessage(message, messageType);
                index++;
                setTimeout(displayNextMessage, 500); // Adjust the delay between messages
            }
        }

        displayNextMessage();
    }

    // Function to append a message to chatbox
    function appendMessage(messageText, messageType) {
        const messageElement = document.createElement('li');
        messageElement.className = `message ${messageType}`;
        messageElement.textContent = messageText;
        chatbox.appendChild(messageElement);
    }
});




// Get the input field and CharacterCount paragraph using querySelector
const inputfield = document.querySelector("#inputfield");
const CharacterCount = document.querySelector("#CharacterCount");

// Add an event listener to the input field listening for input events
inputfield.addEventListener("input", opdaterCharacterCount);

// Function to update the CharacterCount
function opdaterCharacterCount() {
    // Get the length of the text in the input field
    const textLength = inputfield.value.length;

    // Update the text in the CharacterCount paragraph
    CharacterCount.textContent = `Character count: ${textLength}`; }