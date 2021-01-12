<div class="touch-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="touch-left">
                    <div class="touch-logo">
                        <a href="index.html"><img src="{{ asset(Setting('logo-dark')->file) }}" alt="logo"></a> 
                    </div>
                    <p class="border">{!! Setting('sejarah')->content !!}</p>
                    <p class="copy">Copyright @ {{ Date('Y') }} <a href="https://devitems.com/" target="_blank">Developer Teams.</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-2 col-sm-6 col-xs-12">
                <div class="touch-right">
                    <h4>Kontak Kami :</h4>
                    <ul class="touch">
                        <li><i class="fa fa-map-marker"></i>{{ Setting('alamat')->content }}</li>
                        <li><i class="fa fa-phone"></i>Phone : {!! Setting('phone')->content !!}</li>
                        <li><i class="fa fa-envelope"></i>Email : {{ Setting('email')->content }}, </li>
                    </ul>
                    <div class="footer-social two">
                        <ul>
                            @foreach(getSetting('social-media') as $medsos)
                            <li><a href="{{ $medsos->content }}" target="__blank"><i class="{{ $medsos->file }}"></i></a></li>
                            @endforeach
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>