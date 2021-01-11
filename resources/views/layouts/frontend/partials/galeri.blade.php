<section id="portfolio" class="portfolio-area three pt-95 text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="portfolio-title">
                    <h2>Galeri Proyek Kami</h2>
                    <p>Lebih dari 1000+ klien kami telah merasa bahagia setelah memutuskan berkerja sama dengan perusahaan milik kami dan hasil yang di capainya</p>
                </div> 
            </div>
        </div>
        <div class="row"> 
            <div class="grid">
                <?php use App\Models\Galery;
                $galeries = Galery::limit(8)->get();
                ?>
                @foreach($galeries as $galeri)
                    <div class="grid-item cat2 cat3">
                        <img src="{{ asset($galeri->image) }}" alt="project" />
                        <div class="portfolio-hover">
                            <ul>
                                <li>
                                    <a class="image-popup" href="{{ asset($galeri->image) }}"><span class="ti-camera"></span></a>
                                </li>
                            </ul>
                            <h3>{{ $galeri->title }}</h3>
                            <p>{{ $galeri->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>