// SIWS College Chatbot
// A simple chatbot to assist website visitors

document.addEventListener('DOMContentLoaded', function () {
    // Create chatbot elements
    createChatbotElements();

    // Initialize chatbot functionality
    initChatbot();
});

// Create chatbot HTML elements
function createChatbotElements() {
    const chatbotHTML = `
        <div id="chatbot-container" class="chatbot-container">
            <div class="chatbot-header">
                <div class="chatbot-title">
                    <i class="fas fa-robot me-2"></i>
                    SIWS College Assistant
                </div>
                <div class="chatbot-controls">
                    <button id="chatbot-minimize" class="chatbot-btn">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button id="chatbot-close" class="chatbot-btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="chatbot-body">
                <div id="chatbot-messages" class="chatbot-messages">
                    <div class="chatbot-message bot-message">
                        <div class="message-content">
                            Hello! I'm the SIWS College virtual assistant. How can I help you today?
                        </div>
                    </div>
                </div>
                <div class="chatbot-input-container">
                    <input type="text" id="chatbot-input" class="chatbot-input" placeholder="Type your question here...">
                    <button id="chatbot-send" class="chatbot-send-btn">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
        <button id="chatbot-toggle" class="chatbot-toggle">
            <i class="fas fa-comments"></i>
        </button>
    `;

    // Append chatbot to body
    const chatbotWrapper = document.createElement('div');
    chatbotWrapper.innerHTML = chatbotHTML;
    document.body.appendChild(chatbotWrapper);
}

// Initialize chatbot functionality
function initChatbot() {
    const chatbotContainer = document.getElementById('chatbot-container');
    const chatbotToggle = document.getElementById('chatbot-toggle');
    const chatbotMinimize = document.getElementById('chatbot-minimize');
    const chatbotClose = document.getElementById('chatbot-close');
    const chatbotInput = document.getElementById('chatbot-input');
    const chatbotSend = document.getElementById('chatbot-send');
    const chatbotMessages = document.getElementById('chatbot-messages');

    // Initially hide the chatbot
    chatbotContainer.classList.add('chatbot-hidden');

    // Toggle chatbot visibility
    chatbotToggle.addEventListener('click', function () {
        chatbotContainer.classList.toggle('chatbot-hidden');
        chatbotToggle.classList.toggle('chatbot-toggle-hidden');

        // If showing the chatbot, focus on input
        if (!chatbotContainer.classList.contains('chatbot-hidden')) {
            chatbotInput.focus();
        }
    });

    // Minimize chatbot
    chatbotMinimize.addEventListener('click', function () {
        chatbotContainer.classList.add('chatbot-hidden');
        chatbotToggle.classList.remove('chatbot-toggle-hidden');
    });

    // Close chatbot
    chatbotClose.addEventListener('click', function () {
        chatbotContainer.classList.add('chatbot-hidden');
        chatbotToggle.classList.remove('chatbot-toggle-hidden');
    });

    // Send message on button click
    chatbotSend.addEventListener('click', function () {
        sendMessage();
    });

    // Send message on Enter key
    chatbotInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });

    // Function to send user message and get response
    function sendMessage() {
        const message = chatbotInput.value.trim();

        // Don't send empty messages
        if (message === '') return;

        // Add user message to chat
        addMessage(message, 'user');

        // Clear input
        chatbotInput.value = '';

        // Get bot response (with slight delay for natural feel)
        setTimeout(() => {
            const response = getBotResponse(message);
            addMessage(response, 'bot');

            // Scroll to bottom
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        }, 500);
    }

    // Function to add a message to the chat
    function addMessage(message, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `chatbot-message ${sender}-message`;

        const messageContent = document.createElement('div');
        messageContent.className = 'message-content';
        messageContent.textContent = message;

        messageDiv.appendChild(messageContent);
        chatbotMessages.appendChild(messageDiv);

        // Scroll to bottom
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
    }

    // Function to get bot response based on user input
    function getBotResponse(message) {
        // Convert message to lowercase for easier matching
        const lowerMessage = message.toLowerCase();

        // Check for keywords and return appropriate responses
        if (lowerMessage.includes('admission') || lowerMessage.includes('apply')) {
            return "For admission inquiries, please visit our Admissions page. The application process typically starts in March each year. You can also contact our admissions office at admissions@siws-college.edu.";
        }
        else if (lowerMessage.includes('course') || lowerMessage.includes('program') || lowerMessage.includes('degree')) {
            return "SIWS College offers various undergraduate and postgraduate programs including BMS, B.Com, B.Sc IT, B.Sc CS, and M.Com. Please visit our Programs page for detailed information about each course.";
        }
        else if (lowerMessage.includes('fee') || lowerMessage.includes('tuition') || lowerMessage.includes('cost')) {
            return "Tuition fees vary by program. For detailed fee structure, please visit our Admissions page or contact our accounts department at accounts@siws-college.edu.";
        }
        else if (lowerMessage.includes('scholarship') || lowerMessage.includes('financial aid')) {
            return "SIWS College offers merit-based scholarships and financial aid for deserving students. Please contact our scholarship cell for more information.";
        }
        else if (lowerMessage.includes('faculty') || lowerMessage.includes('professor') || lowerMessage.includes('teacher')) {
            return "Our college has highly qualified faculty members with extensive academic and industry experience. You can find faculty profiles on our About Us page.";
        }
        else if (lowerMessage.includes('facility') || lowerMessage.includes('infrastructure') || lowerMessage.includes('campus')) {
            return "SIWS College has modern facilities including well-equipped laboratories, a comprehensive library, sports facilities, and more. Visit our Campus Life section to learn more.";
        }
        else if (lowerMessage.includes('contact') || lowerMessage.includes('reach') || lowerMessage.includes('phone') || lowerMessage.includes('email')) {
            return "You can contact us at info@siws-college.edu or call us at +91-22-2414 2824. Our campus is located at Plot No. 337, Sewree Wadala Estate, Mumbai – 400 031.";
        }
        else if (lowerMessage.includes('hello') || lowerMessage.includes('hi') || lowerMessage.includes('hey')) {
            return "Hello! How can I assist you with information about SIWS College today?";
        }
        else if (lowerMessage.includes('thank')) {
            return "You're welcome! If you have any more questions, feel free to ask.";
        }
        else if (lowerMessage.includes('bye') || lowerMessage.includes('goodbye')) {
            return "Thank you for chatting with us. Have a great day!";
        }
        else {
            return "I'm not sure I understand your question. Could you please rephrase or ask about admissions, programs, facilities, faculty, or contact information?";
        }
    }
}