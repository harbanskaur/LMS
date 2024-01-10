@include('teacher.layout.header')
<!-- Back option in the top right corner -->
<a href="#" class="text-dark float-left mt-2" onclick="history.back()"><i class="bx bx-arrow-back "></i> Back</a>
<br>
<div class="container text-center mt-5 ">
    <div class="btn-group mt-3" role="group" aria-label="Options">
        <button type="button" class="btn btn-light m-1"><a href="{{route('subjects')}}">All Subjects</a></button>
        <button type="button" class="btn btn-light m-1"><a href="{{route('addcourse')}}">Add Topics</a></button>
    </div>
    

    <div class="container mt-4 tables">
        <div class="row">
            <div class="col-md-12">
                <h2>Course : </h2>
    
                <!-- Table to View Subjects -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Subjects</th>
                            <th scope="col">Code</th>
                            <th scope="col">View Topics</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Subject Rows, replace with actual data from backend -->
                        <tr>
                            <td>Mathematics</td>
                            <td>MATH101</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#topicsModal1">View Topics</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Physics</td>
                            <td>PHYS102</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#topicsModal2">View Topics</button>
                            </td>
                        </tr>
                        <!-- Add more rows for other subjects -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal for Viewing Topics - Mathematics -->
    <div class="modal fade" id="topicsModal1" tabindex="-1" role="dialog" aria-labelledby="topicsModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="topicsModalLabel1">Topics for Mathematics</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add content to display topics for Mathematics here -->
                    <p>Topic 1: Algebra</p>
                    <p>Topic 2: Geometry</p>
                    <!-- Add more topics as needed -->
                </div>
            </div>
        </div>
    </div>

        <!-- Modal for Viewing Topics - Physics -->
    <div class="modal fade" id="topicsModal2" tabindex="-1" role="dialog" aria-labelledby="topicsModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="topicsModalLabel2">Topics for Physics</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add content to display topics for Physics here -->
                    <p>Topic 1: Mechanics</p>
                    <p>Topic 2: Thermodynamics</p>
                    <!-- Add more topics as needed -->
                </div>
            </div>
        </div>
    </div>

</div>
@include('teacher.layout.footer')