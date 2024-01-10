@include('teacher.layout.header')

<!-- Bootstrap Card Deck with 3 cards in a row -->
<div class="container mt-4">
    <div class="row">

        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{asset('teacher/img/1.jpg')}}" class="card-img-top" alt="Image 1" height="250" width="250">
                <div class="card-body">
                    <a href="{{ route('subjects') }}" class="card-title-link">
                        <h5 class="card-title">COURSES</h5>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{asset('teacher/img/2.jpg')}}" class="card-img-top" alt="Image 2"  height="250" width="250">
                <div class="card-body">
                    <a href="{{ route('upload') }}" class="card-title-link">
                        <h5 class="card-title">ASSIGNMENTS</h5>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{asset('teacher/img/9.jpg')}}" class="card-img-top" alt="Image 3"  height="250" width="250">
                <div class="card-body">
                    <a href="{{ route('dashboard') }}" class="card-title-link">
                        <h5 class="card-title">SUMMARIES</h5>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{asset('teacher/img/5.jpg')}}" class="card-img-top" alt="Image 1"  height="250" width="250">
                <div class="card-body">
                    <a href="{{ route('batches') }}" class="card-title-link">
                        <h5 class="card-title">BATCHES</h5>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{asset('teacher/img/10.jpg')}}" class="card-img-top" alt="Image 2"  height="250" width="250"> 
                <div class="card-body">
                    <a href="{{ route('msg') }}" class="card-title-link">
                        <h5 class="card-title">MESSAGES</h5>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{asset('teacher/img/12.jpg')}}" class="card-img-top" alt="Image 3"  height="250" width="250">
                <div class="card-body">
                    <a href="{{ route('reminders') }}" class="card-title-link">
                        <h5 class="card-title">REMINDERS</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Card Deck -->

@include('teacher.layout.footer')
