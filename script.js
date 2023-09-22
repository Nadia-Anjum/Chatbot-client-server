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
                // Display chat history on the page
                chatbox.innerHTML = data.history;
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
                    // Append user's input and chatbot's response to chatbox
                    chatbox.innerHTML += '<li class="message sent">' + userInput + '</li>';
                    chatbox.innerHTML += '<li class="message received">' + data.response + '</li>';
                    inputfield.value = '';

                    // Scroll chatbox to the bottom to show the latest message
                    chatbox.scrollTop = chatbox.scrollHeight;
                })
                .catch(error => console.error('Fejl ved chatbot-forespørgsel:', error));
        }
    });
});



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
    CharacterCount.textContent = `Character count: ${textLength}`; }