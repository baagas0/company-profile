<section id="service" class="service-area three pt-100 pb-100 text-center">
    <div class="container">
        @foreach(getSetting('service') as $service)
        <div class="single-service-three">
            <div class="single-service-icon-three">
                <a href="#"><img src="{{ asset($service->file) }}" alt=""></a>
            </div>
            <div class="single-service-content-three">
                <h4><a href="#">{{ $service->title }}</a></h4>
                <p>{{ $service->content }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>