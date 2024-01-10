@include('teacher.layout.header')
<!-- Back option in the top right corner -->
<a href="#" class="text-dark float-left mt-2" onclick="history.back()"><i class="bx bx-arrow-back "></i> Back</a>
<br>
<div class="container mt-4">
    <!-- Send Notification Form -->
    <div class="form-group mt-3">
        <textarea class="form-control" id="notification-input" rows="2" placeholder="Type your notification..."></textarea>
        <button class="btn btn-primary mt-2" onclick="sendNotification()">Send Notification</button>
    </div>

    <!-- Notifications Section -->
    <div id="notifications-section">
        <!-- Display Messages and Reminders -->
        <h2>All Notifications</h2>
        <div id="notification-container"></div>
    </div>
</div>


@include('teacher.layout.footer')
<script>
    function sendNotification() {
        const notificationInput = document.getElementById('notification-input');
        const notificationContainer = document.getElementById('notification-container');

        const notification = notificationInput.value.trim();
        if (notification !== '') {
            // Append the sent notification to the notification container
            const notificationBox = document.createElement('div');
            notificationBox.className = 'notification-box';
            notificationBox.innerHTML = `<strong>You:</strong> ${notification}`;
            notificationContainer.appendChild(notificationBox);

            // Clear the notification input
            notificationInput.value = '';
        }
    }

    // Simulate fetching notifications from students
    function fetchStudentNotifications() {
        const studentNotifications = [
            "Student1: Assignment submission",
            "Student2: Request to join a batch",
            // Add more notifications as needed
        ];

        const notificationContainer = document.getElementById('notification-container');
        studentNotifications.forEach(notification => {
            const notificationBox = document.createElement('div');
            notificationBox.className = 'notification-box';
            notificationBox.innerHTML = `<strong>Student:</strong> ${notification}`;
            notificationContainer.appendChild(notificationBox);
        });
    }

    // Fetch student notifications on page load (you can replace this with actual fetching from the backend)
    fetchStudentNotifications();
</script>