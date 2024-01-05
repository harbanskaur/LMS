@include('admin.layout.header')
<table class="table">
    <thead>
        <tr>
            <th>Message To : </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Teacher 1</td>
            <td>
                <button class="btn btn-primary chat-button" onclick="initiateChat('Teacher 1')">Message</button>
                <button class="btn btn-secondary view-chat-button" onclick="viewChat('Teacher 1')"> View Chat</button>
            </td>
        </tr>
        <!-- Add more rows as needed -->
        <tr>
            <td>Teacher 2</td>
            <td>
                <button class="btn btn-primary chat-button" onclick="initiateChat('Teacher 2')">Message</button>
                <button class="btn btn-secondary view-chat-button" onclick="viewChat('Teacher 2')">View Chat</button>
            </td>
        </tr>
    </tbody>
</table>

<!-- Chat Modal -->
<div class="modal fade" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="chatModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chatModalLabel">Chat with <span id="chatTeacherName"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="message-container" id="chatModalBody">
                    <!-- Chat content will be displayed here -->
                </div>
                <div class="message-input">
                    <input type="text" id="messageInput" placeholder="Type your message...">
                    <button onclick="sendMessage()">Send</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- View Chat Modal -->
<div class="modal fade" id="viewChatModal" tabindex="-1" role="dialog" aria-labelledby="viewChatModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewChatModalLabel">View Chat with <span id="viewChatTeacherName"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="viewChatModalBody">
                <!-- Previous chat content will be displayed here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@include('admin.layout.footer')
<script>
    function initiateChat(teacherName) {
        // Set the teacher name in the chat modal
        document.getElementById('chatTeacherName').innerText = teacherName;

        // Show the chat modal
        $('#chatModal').modal('show');
    }

    function viewChat(teacherName) {
        // Set the teacher name in the view chat modal
        document.getElementById('viewChatTeacherName').innerText = teacherName;

        // Show the view chat modal
        $('#viewChatModal').modal('show');
    }

    // Mock function to load previous chat content (replace with actual logic)
    function loadPreviousChat(teacherName) {
        return "Previous chat content for " + teacherName;
    }

    // Mock function to load chat content (replace with actual logic)
    function loadChatContent(teacherName) {
        return "Chat content with " + teacherName;
    }

    function sendMessage() {
        var messageInput = document.getElementById('messageInput');
        var chatModalBody = document.getElementById('chatModalBody');

        var messageText = messageInput.value.trim();
        if (messageText !== '') {
            // Create a new message element
            var newMessage = document.createElement('div');
            newMessage.className = 'message';
            newMessage.innerHTML = '<strong>You:</strong> ' + messageText;

            // Append the new message to the chat modal body
            chatModalBody.appendChild(newMessage);

            // Clear the input field
            messageInput.value = '';

            // Scroll to the bottom of the chat modal body
            chatModalBody.scrollTop = chatModalBody.scrollHeight;
        }
    }

    // Execute when the chat modal is shown
    $('#chatModal').on('shown.bs.modal', function () {
        var teacherName = document.getElementById('chatTeacherName').innerText;
        var chatContent = loadChatContent(teacherName);
        document.getElementById('chatModalBody').innerHTML = chatContent;
    });

    // Execute when the view chat modal is shown
    $('#viewChatModal').on('shown.bs.modal', function () {
        var teacherName = document.getElementById('viewChatTeacherName').innerText;
        var previousChatContent = loadPreviousChat(teacherName);
        document.getElementById('viewChatModalBody').innerText = previousChatContent;
    });
</script>