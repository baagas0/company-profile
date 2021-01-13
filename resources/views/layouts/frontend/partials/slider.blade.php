<section id="slider" class="slider-area three slider-area-three">	
  <div class="slider-wrapper">
    <?php use App\Models\Slider; 
    $sliders = Slider::where('is_active', 1)->get();
    ?>
    @foreach($sliders as $slider)
    <div class="single-slide height-100vh active" style="background-image: url('{{ asset($slider->image) }}');">
        <div class="slider-content">
            <div class="container">
                <div class="text-content-wrapper">
                    <div class="text-content text-left" >
                        {!! $slider->content !!}
                        @if($slider->is_link)
                        <a href="{{ $slider->is_link }}" class="default-btn">Baca Lagi</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</section>