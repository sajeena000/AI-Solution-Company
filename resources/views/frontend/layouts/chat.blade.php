<style>
    /* Chat Head Styles */
    .chat_head {
        height: 60px;
        width: 60px;
        border-radius: 50%;
        background-color: rgb(255, 255, 255);
        /* Updated color */
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
    }

    .chat_head:hover {
        transform: scale(1.1);
    }

    /* Add icon to the chat head */
    .chat_head img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    /* Chat Wrapper Styles */
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
        /* Updated Gradient */
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

    /* Chat Header Styles */
    .chat_header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px;
        background-color: rgb(247, 87, 87);
        /* Updated color */
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
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .chat_header #chat_close:hover {
        color: #ffe4e1;
        /* Light coral */
    }

    /* Chat Body Styles */
    .chat_body {
        position: relative;
        padding: 16px;
        background-color: #ffe4e1;
        /* Light coral */
        height: calc(100% - 56px);
        overflow-y: auto;
        font-family: Arial, sans-serif;
        color: #333;
        font-size: 14px;
        display: flex;
        flex-direction: column;
    }

    .chat_body p {
        margin: 0;
    }

    .chat_box {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 10px;
        z-index: 50;
        justify-self: end;
        align-self: end;
        display: flex;
    }

    .chat_body .bot_reply {
        display: flex;
        justify-content: start;
    }

    .chat_body .user_reply {
        margin-top: 20px;
        display: flex;
        justify-content: end;
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
            <div class="bot_reply">
                Bot: How can I assist you today?
            </div>

            <div class="user_reply">
                Me: How can I assist you today?
            </div>
        </div>

        <div class="chat_box">
            <textarea id="chat_textarea"></textarea>

            <button id="send_button">Send</button>
        </div>

    </div>
</div>

<script>
    const chatHeadTrigger = document.getElementById("chat_head_trigger");
    const chatWrapper = document.getElementById("chat_wrapper");
    const chatClose = document.getElementById("chat_close");

    const messageContainer =  document.getElementById("message_container");
    const chatTextarea = document.getElementById("chat_textarea");
    const sendButton = document.getElementById("send_button");

    chatHeadTrigger.addEventListener('click', () => {
        chatWrapper.style.display = "block";
    });

    chatClose.addEventListener('click', () => {
        chatWrapper.style.display = "none";
    });


    sendButton.addEventListener('click', async () => {
        const query = chatTextarea.value;
        if (query.length <= 0) {
            return alert("Please type some thing.");
        }

        const userDiv = document.createElement('div');
        userDiv.innerHTML = `<div class="user_reply">Me: ${query}</div>`;
        messageContainer.append(userDiv);

        try {
            const response = await fetch(`{{ route('frontend.chat-response') }}?query=${query}`, {
                headers: {
                    Accept: 'application/json'
                }
            });
            const answer = await response.json();

            if (answer) {
                const botDiv = document.createElement('div');
                botDiv.innerHTML = `<div class="bot_reply">Bot: ${answer }</div>`;
                messageContainer.append(botDiv);
            }
        } catch (err) {
            throw err;
        }
    });
</script>
