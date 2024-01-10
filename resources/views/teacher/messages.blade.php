@include('teacher.layout.header')
<!-- Back option in the top right corner -->
<a href="#" class="text-dark float-left mt-2" onclick="history.back()"><i class="bx bx-arrow-back "></i> Back</a>
<br>
<div class="container text-center mt-5 ">
    <div class="container mt-4">
        <h2>Chat With Admin</h2>
        <!-- Chat Box -->
        <div id="chat-box"></div>

        <!-- Message Input -->
        <div class="form-group mt-3">
            <textarea class="form-control" id="message-input" rows="2" placeholder="Type your message..."></textarea>
            <button class="btn btn-primary mt-2" onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        function sendMessage() {
            const messageInput = document.getElementById('message-input');
            const chatBox = document.getElementById('chat-box');

            const message = messageInput.value.trim();
            if (message !== '') {
                // Append the sent message to the chat box
                chatBox.innerHTML += `<div><strong>You:</strong> ${message}</div>`;

                // Simulate receiving a response (you can replace this with actual server-side logic)
                setTimeout(() => {
                    chatBox.innerHTML += `<div><strong>Admin:</strong> Hi there! How can I help you?</div>`;
                    // Scroll to the bottom to show the latest message
                    chatBox.scrollTop = chatBox.scrollHeight;
                }, 500);
                
                // Clear the message input
                messageInput.value = '';
            }
        }
    </script>

</div>
@include('teacher.layout.footer')