<style>
    .chat_head {
        height: 60px;
        width: 60px;
        border-radius: 50%;
        background-color: rgb(255, 255, 255);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        position: fixed;
        bottom: 20px;
        left: 40px;
        color: white;
        cursor: pointer;
        user-select: none;
        font-size: 24px;
        transition: transform 0.3s ease;
        z-index: 100001;
    }

    .chat_head:hover {
        transform: scale(1.1);
    }

    .chat_head img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    .chat_wrapper {
        position: fixed;
        bottom: 90px;
        left: 40px;
        height: 450px;
        width: 350px;
        border-radius: 16px;
        z-index: 100000;
        border: 1px solid rgb(247, 87, 87);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        display: none;
        overflow: hidden;
        animation: fadeIn 0.3s ease;
        background: linear-gradient(135deg, rgb(247, 87, 87), #e74c3c);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .chat_header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px;
        background-color: rgb(247, 87, 87);
        color: white;
        font-weight: bold;
    }

    .chat_header h2 {
        font-size: 18px;
        margin: 0;
    }

    .chat_header #chat_close {
        cursor: pointer;
        user-select: none;
        font-size: 24px;
        transition: color 0.3s ease;
        line-height: 1;
    }

    .chat_header #chat_close:hover {
        color: #ffe4e1;
    }

    .chat_body {
        height: calc(100% - 56px);
        background-color: #ffe4e1;
        display: flex;
        flex-direction: column;
    }

    #message_container {
        flex-grow: 1;
        overflow-y: auto;
        padding: 16px;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    #message_container::-webkit-scrollbar {
        display: none;
    }

    .chat_box {
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.1);
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .chat_box textarea {
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ddd;
        resize: none;
        font-family: inherit;
        font-size: 14px;
    }

    .chat_box button {
        padding: 10px 16px;
        border-radius: 8px;
        border: none;
        background-color: rgb(96, 2, 162);
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .chat_box button:hover {
        background-color: rgb(76, 2, 132);
    }

    .reply {
        max-width: 70%;
        margin-bottom: 12px;
        padding: 10px 12px;
        border-radius: 12px;
        color: white;
        word-wrap: break-word;
    }

    .bot_reply {
        align-self: flex-start;
        background-color: #e74c3c;
        border-bottom-left-radius: 4px;
    }

    .user_reply {
        align-self: flex-end;
        background-color: #2c3e50;
        border-bottom-right-radius: 4px;
        margin-left: auto;
    }

    #message_container {
        display: flex;
        flex-direction: column;
    }
</style>

<div class="chat_head" id="chat_head_trigger">
    <img src="{{ asset('frontend/images/chatbot/chat1.png') }}" alt="Chat Icon">
</div>

<div class="chat_wrapper" id="chat_wrapper">
    <div class="chat_header">
        <h2>Chat Bot</h2>
        <span id="chat_close">&times;</span>
    </div>

    <div class="chat_body">
        <div id="message_container">
            <div class="bot_reply reply">
                How can I assist you today?
            </div>
        </div>

        <div class="chat_box">
            <textarea id="chat_textarea" rows="3" placeholder="Type your message..."></textarea>
            <button id="send_button">Send</button>
        </div>
    </div>
</div>

<script>
    const chatHeadTrigger = document.getElementById("chat_head_trigger");
    const chatWrapper = document.getElementById("chat_wrapper");
    const chatClose = document.getElementById("chat_close");
    const messageContainer = document.getElementById("message_container");
    const chatTextarea = document.getElementById("chat_textarea");
    const sendButton = document.getElementById("send_button");

    function scrollToBottom() {
        messageContainer.scrollTop = messageContainer.scrollHeight;
    }

    function addMessage(content, isUser = false) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `${isUser ? 'user_reply' : 'bot_reply'} reply`;
        messageDiv.textContent = content;
        messageContainer.appendChild(messageDiv);
        scrollToBottom();
    }

    chatHeadTrigger.addEventListener('click', () => {
        chatWrapper.style.display = "block";
        scrollToBottom();
    });

    chatClose.addEventListener('click', () => {
        chatWrapper.style.display = "none";
    });

    chatTextarea.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            sendButton.click();
        }
    });

    sendButton.addEventListener('click', async () => {
        const query = chatTextarea.value.trim();
        if (!query) return;

        chatTextarea.value = "";
        addMessage(query, true);

        try {
            const response = await fetch(
                `{{ route('frontend.chat-response') }}?query=${encodeURIComponent(query)}`, {
                    headers: {
                        Accept: 'application/json'
                    }
                });

            const result = await response.json();
            const answer = response.ok ? result.data : "Bot could not identify your request!";
            addMessage(answer);

        } catch (err) {
            console.error(err);
            addMessage("Sorry, something went wrong. Please try again later.");
        }
    });
</script>
