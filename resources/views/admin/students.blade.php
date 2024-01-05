@include('admin.layout.header')
            <!-- Search and Filter Options -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <form class="form-inline">
                        <div class="form-group mb-2">
                            <label for="searchInput" class="sr-only">Search</label>
                            <input type="text" class="form-control" id="searchInput" placeholder="Search by Course" style="margin-top: 20px">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 ml-2" style="margin-top: 20px">Search</button>
                    </form>
                </div>
                <div class="col-md-6 text-right">
                    <!-- Add filter options here if needed -->
                </div>
            </div>

            <!-- Students Table -->
            <div class="mt-4 table-responsive">
                <h2>Students</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Student Name</th>
                            <th scope="col">Course</th>
                            <th scope="col">Admission No/User ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Fee Details</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Computer Science</td>
                            <td>2021001</td>
                            <td>johndoe@example.com</td>
                            <td>$1000</td>
                            <td>21</td>
                            <td>Male</td>
                        </tr>
                        <!-- Add more rows as needed -->
                        <tr>
                            <td>Jane Smith</td>
                            <td>Physics</td>
                            <td>2021002</td>
                            <td>janesmith@example.com</td>
                            <td>$1200</td>
                            <td>20</td>
                            <td>Female</td>
                        </tr>
                    </tbody>
                </table>
            </div>
@include('admin.layout.footer')