@include('admin.layout.header')

{{-- <script type="text/javascript" src="{{asset('admin/js/main.js')}}"></script> --}}

                <!-- Graphs Section -->
                <div class="row mt-4">
                    <!-- Performance Graph -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Performance of Students</h5>
                                <canvas id="performanceChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Attendance Graph -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Attendance of Students</h5>
                                <canvas id="attendanceChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Course Progress Graph -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Course Progress</h5>
                                <canvas id="courseProgressChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
@include('admin.layout.footer')

<script>
     // Example Chart.js configurations (replace with actual data)
 var performanceData = {
    labels: ["January", "February", "March", "April", "May", "June"],
    datasets: [{
        label: "Performance",
        data: [65, 59, 80, 81, 56, 55],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
    }]
};

var attendanceData = {
    labels: ["January", "February", "March", "April", "May", "June"],
    datasets: [{
        label: "Attendance",
        data: [75, 80, 85, 90, 95, 92],
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
    }]
};

var courseProgressData = {
    labels: ["Chapter 1", "Chapter 2", "Chapter 3", "Chapter 4", "Chapter 5"],
    datasets: [{
        label: "Course Progress",
        data: [20, 40, 60, 80, 100],
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
    }]
};

// Get chart elements
var performanceChartElement = document.getElementById('performanceChart').getContext('2d');
var attendanceChartElement = document.getElementById('attendanceChart').getContext('2d');
var courseProgressChartElement = document.getElementById('courseProgressChart').getContext('2d');

// Create charts
var performanceChart = new Chart(performanceChartElement, {
    type: 'bar',
    data: performanceData,
});

var attendanceChart = new Chart(attendanceChartElement, {
    type: 'bar',
    data: attendanceData,
});

var courseProgressChart = new Chart(courseProgressChartElement, {
    type: 'line',
    data: courseProgressData,
});
</script>