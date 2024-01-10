@include('teacher.layout.header')
<!-- Back option in the top right corner -->
<a href="#" class="text-dark float-left mt-2" onclick="history.back()"><i class="bx bx-arrow-back "></i> Back</a>
<br>
<div class="container text-center mt-5 ">
    <div class="btn-group mt-3" role="group" aria-label="Options">
        <button type="button" class="btn btn-light m-1"><a href="{{route('subjects')}}">All Subjects</a></button>
        <button type="button" class="btn btn-light m-1"><a href="{{route('addcourse')}}">Add Topics</a></button>
    </div>
    

    <br/><br/>
    <form>
        <div class="form-group">
            <label for="subjectSelect2">Select Subject</label>
            <select class="form-control" id="subjectSelect2">
                <option value="Physics">Physics</option>
                <!-- Add more options for other subjects -->
            </select>
        </div>
        <div class="form-group">
            <label for="topicName2">Topic Name</label>
            <input type="text" class="form-control" id="topicName2" placeholder="Enter topic name">
        </div>
        <button type="submit" class="btn btn-success">Add Topic</button>
    </form>
</div>
@include('teacher.layout.footer')