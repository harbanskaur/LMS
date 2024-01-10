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
        <!-- Horizontal Card -->
        <div class="card card-horizontal">
            <img src="https://via.placeholder.com/200" class="card-img" alt="Card Image">
            <div class="card-body">
                <h5 class="card-title">Card Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum
                    felis ac, aliquam libero.</p>
                <div class="read-more-content">
                    <p>Additional content goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <span class="read-more-toggle" onclick="toggleReadMore(this)">Read More</span>
            </div>
        </div>
        <div class="card card-horizontal">
            <img src="https://via.placeholder.com/200" class="card-img" alt="Card Image">
            <div class="card-body">
                <h5 class="card-title">Card Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum
                    felis ac, aliquam libero.</p>
                <div class="read-more-content">
                    <p>Additional content goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <span class="read-more-toggle" onclick="toggleReadMore(this)">Read More</span>
            </div>
        </div>
        <div class="card card-horizontal">
            <img src="https://via.placeholder.com/200" class="card-img" alt="Card Image">
            <div class="card-body">
                <h5 class="card-title">Card Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id arcu aliquet, elementum
                    felis ac, aliquam libero.</p>
                <div class="read-more-content">
                    <p>Additional content goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <span class="read-more-toggle" onclick="toggleReadMore(this)">Read More</span>
            </div>
        </div>
    </div>

    
</div>
@include('teacher.layout.footer')
<script>
    function toggleReadMore(element) {
        const cardBody = element.parentElement;
        const readMoreContent = cardBody.querySelector('.read-more-content');

        readMoreContent.style.display = readMoreContent.style.display === 'none' ? 'block' : 'none';
        element.textContent = readMoreContent.style.display === 'none' ? 'Read More' : 'Read Less';
    }
</script>