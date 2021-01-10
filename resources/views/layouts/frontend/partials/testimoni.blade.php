<div id="testimonial" class="testimonial-area text-center mt-100 mb-100">
    <div class="container">
        <div class="row">
            <div class="testimonial-owl">
                <?php
                    use App\Models\Testimonies;
                    $testimonies = Testimonies::get();
                ?>
                @foreach($testimonies as $testimoni)
                <div class="col-xs-12">
                    <div class="single-testimonial">
                        <div class="testimonial-content">
                            <p><span class="ti-quote-left"></span>{{ $testimoni->content }}<span class="ti-quote-right"></span></p>    
                            <div class="testimonial-img">
                                <a href="#"><img src="{{ asset($testimoni->image) }}" alt="testimonial"></a>
                                <h5>{{ $testimoni->name }}</h5>
                                <h6>Klien</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div> 
    </div>
</div>