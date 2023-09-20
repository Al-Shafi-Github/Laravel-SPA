<x-layout>


<div id="carouselExampleIndicators"  class="carousel slide mb-5 custom-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($images as $image)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="@if($loop->first) active @endif"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($images as $image)
            <div class="carousel-item @if($loop->first) active @endif">
                <img class="d-block w-100" src="{{ asset($image->image_path) }}" alt="{{ $image->title }}">
            </div>
        @endforeach
    </div>
    
   
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- 
<img src="{{ asset('/assets/images/Sam.jpg') }}"> -->
<div class="container marketing mb-5">

        <!-- Three columns of text below the carousel -->
        <div class="row">
        <div class="col-lg-4">
            <img class="rounded-circle" src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Richard</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('/assets/images/rico.jpg.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Samuel</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('/assets/images/Sam.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Ricardo</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script>
    $(document).ready(function() {
      $('#carouselExampleIndicators').carousel({
        interval: 4000 
    });
}
  </script>
</x-layout>