<section class="who-area who-two">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-video">
                    <img src="{{ asset(Setting('about-video-thumbnail')->file) }}" alt="who">
                    <div class="video-icon video-hover">
                        <a class="video-popup" href="{{ asset(Setting('about-video')->content) }}">
                            <i class="ti-control-play"></i>
                        </a>
                    </div>
                </div>
            </div> 
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="who-content">
                    <h3>{{ Setting('about-us')->title }}</h3>
                    {!! Setting('about-us')->content !!}
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="who-tab mt-50">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="section-tab">
                        <div class="section-tab-menu text-center">
                            <ul role="tablist">
                                <li role="presentation" class="active"><a href="#{{ Setting('sejarah')->slug }}" aria-controls="{{ Setting('sejarah')->slug }}" role="tab" data-toggle="tab">{{ Setting('sejarah')->title }}</a></li>

                                <li role="presentation"><a href="#{{ Setting('visi')->slug }}" aria-controls="{{ Setting('visi')->title }}" role="tab" data-toggle="tab">{{ Setting('visi')->title }}</a></li>

                                <li role="presentation"><a href="#{{ Setting('misi')->slug }}" aria-controls="{{ Setting('misi')->slug }}" role="tab" data-toggle="tab">{{ Setting('misi')->title }}</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content row">
                            <div id="{{ Setting('sejarah')->slug }}" role="tabpanel" class="tab-pane active section-tab-item">
                                <div class="col-xs-12">
                                    <div class="single-tab">
                                        {!! Setting('sejarah')->content !!}
                                    </div>
                                </div>
                            </div>
                            <div id="{{ Setting('visi')->slug }}" role="tabpanel" class="tab-pane section-tab-item">
                                <div class="col-xs-12">
                                    <div class="single-tab">
                                        {!! Setting('visi')->content !!}
                                    </div>    
                                </div>
                            </div>
                            <div id="{{ Setting('misi')->slug }}" role="tabpanel" class="tab-pane section-tab-item">
                                <div class="col-xs-12">
                                    <div class="single-tab">
                                        {!! Setting('misi')->content !!}
                                    </div> 
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="who-img">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-who">
                                    <img src="{{ asset(Setting('visi')->file) }}" alt="who">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-who">
                                    <img src="{{ asset(Setting('misi')->file) }}" alt="who">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>