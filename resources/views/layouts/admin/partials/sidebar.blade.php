<div class="page-sidebar">
    <div class="page-sidebar-inner">
        <div class="page-sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="{{ asset('backend/images/avatars/avatar1.png') }}">
            </div>
            <div class="sidebar-profile-info">
                <a href="javascript:void(0);" class="account-settings-link">
                    <p>{{ Auth::user()->name }}</p>
                    <span>{{ Auth::user()->email }}<i class="material-icons float-right">arrow_drop_down</i></span>
                </a>
            </div>
        </div>
        <div class="page-sidebar-menu">
            <div class="page-sidebar-settings hidden">
                <ul class="sidebar-menu list-unstyled">
                    <li><a href="{{ route('user.profile') }}" class="waves-effect waves-grey"><i class="material-icons">inbox</i>User Profile</a></li>

                    <li><a href="{{ route('user.add') }}" class="waves-effect waves-grey"><i class="material-icons">inbox</i>User Add</a></li>
                    
                    <li class="divider"></li>

                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            
                        </form>

                    </li>
                </ul>
            </div>
            <div class="sidebar-accordion-menu">
                <ul class="sidebar-menu list-unstyled">
                    <li>
                        <a href="/admin" class="waves-effect waves-grey">
                            <i class="material-icons">settings_input_svideo</i>Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('setting') }}" class="waves-effect waves-grey">
                            <i class="material-icons">settings</i>Web Setting
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('sosmed') }}" class="waves-effect waves-grey">
                            <i class="material-icons">facebook</i>Social Media
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('slider') }}" class="waves-effect waves-grey">
                            <i class="material-icons">view_carousel</i>Slider
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('service') }}" class="waves-effect waves-grey">
                            <i class="material-icons">dns</i>Service
                        </a>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-grey">
                            <i class="material-icons">integration_instructions</i>About<i class="material-icons sub-arrow">keyboard_arrow_right</i>
                        </a>
                        <ul class="accordion-submenu list-unstyled">
                            <li><a href="{{ route('about') }}">Content</a></li>
                            {{-- <li><a href="{{ route('about.pengalaman') }}">pengalaman</a></li> --}}
                            <li><a href="{{ route('about.page') }}">Style Page</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-grey">
                            <i class="material-icons">collections</i>Galeri<i class="material-icons sub-arrow">keyboard_arrow_right</i>
                        </a>
                        <ul class="accordion-submenu list-unstyled">
                            <li><a href="{{ route('testimoni') }}">Testimoni</a></li>
                            <li><a href="{{ route('galeri') }}">Content</a></li>
                            <li><a href="{{ route('galeri.page') }}">Style Page</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-grey">
                            <i class="material-icons">rss_feed</i>Blog<i class="material-icons sub-arrow">keyboard_arrow_right</i>
                        </a>
                        <ul class="accordion-submenu list-unstyled">
                            <li><a href="{{ route('blog') }}">Content</a></li>
                            <li><a href="{{ route('blog.page') }}">Style Page</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-footer">
            <p class="copyright">Developer ©</p>
            <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
        </div>
    </div>
</div>