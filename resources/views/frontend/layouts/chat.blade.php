<style>
    .chat_head {
        height: 60px;
        width: 60px;
        border-radius: 50%;
        background-color: rgb(107, 107, 248);
        position: fixed;
        bottom: 20px;
        left: 40px;
        color: white;
        cursor: pointer;
        user-select: none
    }

    .chat_wrapper {
        position: fixed;
        bottom: 20px;
        left: 40px;
        height: 400px;
        width: 300px;
        border-radius: 16px;
        z-index: 100000;
        border: 1px solid rgb(107, 107, 248);
        display: none;
    }

    .chat_header {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        padding: 8px;
        display: flex;
        justify-content: space-between;
        background-color: rgb(124, 124, 245);
        border-top-right-radius: inherit;
        border-top-left-radius: inherit;
        color: white;
    }

    .chat_header h2 {
        font-size: 18px;
        color: white;
    }

    .chat_header #chat_close {
        cursor: pointer;
        user-select: none;
    }

    .chat_body {
        padding: 80px 8px 0 8px;
        background-color: rgb(200, 200, 241);
        height: 100%;
        border-radius: inherit;
    }
</style>


<div class="chat_head" id="chat_head_trigger">
    Chat Head
</div>

<div class="chat_wrapper" id="chat_wrapper">
    <div class="chat_header">
        <h2>Chat Bot</h2>

        <span id="chat_close">Close </span>
    </div>

    <div class="chat_body">
        Testing
    </div>
</div>


<script>
    const chatHeadTrigger = document.getElementById("chat_head_trigger");
    const chatWrapper = document.getElementById("chat_wrapper");
    const chatClose = document.getElementById("chat_close");

    chatHeadTrigger.addEventListener('click', () => {
        chatWrapper.style.display = "block";
    });

    chatClose.addEventListener('click', () => {
        chatWrapper.style.display = "none";
    });
</script>
