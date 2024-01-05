@include('admin.layout.header')
    <!-- Courses Table -->
    <div class="mt-4 table-responsive">
        <h2>Courses</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Course Name</th>
                    <th scope="col">Code (ID)</th>
                    <th scope="col">Seats</th>
                    <th scope="col">Duration</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Introduction to Programming</td>
                    <td>CSE101</td>
                    <td>50</td>
                    <td>12 weeks</td>
                </tr>
                <!-- Add more rows as needed -->
                <tr>
                    <td>Advanced Database Management</td>
                    <td>ITC302</td>
                    <td>30</td>
                    <td>16 weeks</td>
                </tr>
            </tbody>
        </table>
    </div>
@include('admin.layout.footer')