@include('teacher.layout.header')
<!-- Back option in the top right corner -->
<a href="#" class="text-dark float-left mt-2" onclick="history.back()"><i class="bx bx-arrow-back "></i> Back</a>
<br>
<div class="container text-center mt-5 ">
    <div class="btn-group mt-3" role="group" aria-label="Options">
        <button type="button" class="btn btn-light m-1"><a href="{{route('batches')}}">Create Batch</a></button>
        <button type="button" class="btn btn-light m-1"><a href="{{route('allBatches')}}">All Batchs</a></button>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h2>Create Batch</h2>

                <!-- Form for Batch Creation -->
                <form class="forms">
                    <div class="form-group">
                        <label for="batchTitle">Title</label>
                        <input type="text" class="form-control" id="batchTitle" placeholder="Enter batch title">
                    </div>
                    <div class="form-group">
                        <label for="batchDescription">Description</label>
                        <textarea class="form-control" id="batchDescription" rows="3" placeholder="Enter batch description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="batchFiles">Upload Files</label>
                        <input type="file" class="form-control-file" id="batchFiles">
                    </div>
                    <button type="submit" class="btn btn-primary">Create Batch</button>
                </form>
            </div>
        </div>
    </div>
    
</div>
@include('teacher.layout.footer')