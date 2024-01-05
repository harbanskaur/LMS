@include('admin.layout.header')
<!-- Teachers Table -->
<div class="mt-4 table-responsive">
    <h2>Teachers</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Subject</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>Mathematics</td>
                <td>35</td>
                <td>johndoe@example.com</td>
                <td>Male</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginDetailsModal">
                        View Login Details
                    </button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editTeacherModal">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteTeacherModal">
                        Delete
                    </button>
                </td>
                
            </tr>
            <!-- Add more rows as needed -->
            <tr>
                <td>Jane Smith</td>
                <td>Physics</td>
                <td>40</td>
                <td>janesmith@example.com</td>
                <td>Female</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginDetailsModal">
                        View Login Details
                    </button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editTeacherModal">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteTeacherModal">
                        Delete
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="modal fade" id="loginDetailsModal" tabindex="-1" role="dialog" aria-labelledby="loginDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginDetailsModalLabel">Login Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Username:</strong> teacher_username</p>
                <p><strong>Password:</strong> teacher_password</p>
            </div>
        </div>
    </div>
</div>
<!-- Button to open modal for adding a new teacher -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTeacherModal">
    Add Teacher
</button>

<!-- Modal for adding a new teacher -->
<div class="modal fade" id="addTeacherModal" tabindex="-1" role="dialog" aria-labelledby="addTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTeacherModalLabel">Add New Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add a form or input fields for adding a new teacher here -->
                <form>
                    <div class="form-group">
                        <label for="teacherName">Name</label>
                        <input type="text" class="form-control" id="teacherName" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="teacherSubject">Subject</label>
                        <input type="text" class="form-control" id="teacherSubject" placeholder="Enter subject">
                    </div>
                    <div class="form-group">
                        <label for="teacherAge">Age</label>
                        <input type="text" class="form-control" id="teacherAge" placeholder="Enter age">
                    </div>
                    <div class="form-group">
                        <label for="teacherEmail">Email</label>
                        <input type="email" class="form-control" id="teacherEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="teacherGender">Gender</label>
                        <select class="form-control" id="teacherGender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Teacher</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for editing a teacher -->
<div class="modal fade" id="editTeacherModal" tabindex="-1" role="dialog" aria-labelledby="editTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTeacherModalLabel">Edit Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add the form for editing a teacher here -->
                <form>
                    <div class="form-group">
                        <label for="editTeacherName">Name</label>
                        <input type="text" class="form-control" id="editTeacherName" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="editTeacherSubject">Subject</label>
                        <input type="text" class="form-control" id="editTeacherSubject" placeholder="Enter subject">
                    </div>
                    <div class="form-group">
                        <label for="editTeacherAge">Age</label>
                        <input type="text" class="form-control" id="editTeacherAge" placeholder="Enter age">
                    </div>
                    <div class="form-group">
                        <label for="editTeacherEmail">Email</label>
                        <input type="email" class="form-control" id="editTeacherEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="editTeacherGender">Gender</label>
                        <select class="form-control" id="editTeacherGender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.layout.footer')