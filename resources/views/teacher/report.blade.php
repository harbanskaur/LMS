@include('teacher.layout.header')
<!-- Back option in the top right corner -->
<a href="#" class="text-dark float-left mt-2" onclick="history.back()"><i class="bx bx-arrow-back "></i> Back</a>
<br>
<div class="container text-center mt-5 ">
    <div class="btn-group mt-3" role="group" aria-label="Options">
        <button type="button" class="btn btn-light m-1"><a href="{{route('report')}}">Assignments Report</a></button>
        <button type="button" class="btn btn-light m-1"><a href="{{route('upload')}}">Upload Assignments</a></button>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h2>Assignments Report</h2>
    
                <!-- Table for Assignments Report -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Student Name / Roll No</th>
                            <th scope="col">Subject Code</th>
                            <th scope="col">View / Download</th>
                            <th scope="col">Submission Date</th>
                            <th scope="col">Time Line Given</th>
                            <th scope="col">Marks Obtained</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Assignment Report Row, replace with actual data from backend -->
                        <tr>
                            <td>John Doe / 12345</td>
                            <td>MATH101</td>
                            <td>
                                <!-- Add link to assignment file -->
                                <a href="">Click Here</a>
                            </td>
                            <td>2024-01-15</td>
                            <td>2024-01-20</td>
                            <td>
                                <!-- Add input for marks obtained -->
                                <input type="number" class="form-control" placeholder="Enter marks">
                            </td>
                            <td>
                                <!-- Add button to send marks -->
                                <button type="button" class="btn btn-success btn-send-marks">Send Marks</button>
                            </td>
                        </tr>
                        <!-- Add more rows for other assignment reports -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    



</div>
@include('teacher.layout.footer')