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
            <h2>Upload Assignments Here</h2>

            <!-- Form to Upload Assignments -->
            <form class="forms">
                <div class="form-group">
                    <label for="subject"> Select Subject</label>
                    <!-- Add a dropdown for selecting the subject -->
                    <select class="form-control" id="subject" name="subject">
                        <option value="mathematics">Mathematics</option>
                        <!-- Add more options for other subjects -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="submissionDate">Submission Date</label>
                    <!-- Add an input for submission date with a default value of the current date -->
                    <input type="date" class="form-control" id="submissionDate" name="submissionDate" value="{{ date('Y-m-d') }}">
                </div>
                {{-- <div class="form-group">
                    <label for="submissionDate">Upload Date</label>
                    <!-- Add an input for submission date with a default value of the current date -->
                    <input type="date" class="form-control" id="submissionDate" name="submissionDate" value="{{ date('Y-m-d') }}">
                </div> --}}
                <div class="form-group">
                    <label for="uploadFile">Upload File</label>
                    <!-- Add file input for uploading files -->
                    <input type="file" class="form-control-file" id="uploadFile" name="uploadFile">
                </div>
                <div class="form-group">
                    <label for="totalMarks">Total Marks</label>
                    <!-- Add an input for total marks with a default value of 20 -->
                    <input type="number" class="form-control" id="totalMarks" name="totalMarks" placeholder="Total Marks" value="20">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</div>



</div>
@include('teacher.layout.footer')