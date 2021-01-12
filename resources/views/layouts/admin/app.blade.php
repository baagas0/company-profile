<?php
    use Spatie\Activitylog\Models\Activity;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin | {!! Setting('sejarah')->content !!}">
    <meta name="keywords" content="{{ Setting('title')->content }}">
    <meta name="author" content="stacks">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Admin | {{ Setting('title')->content }}</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(Setting('favicon')->file) }}">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/waves/waves.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/toastr/toastr.min.css') }}" rel="stylesheet"> 

    <!-- Page Stle -->
    @stack('css')

    <!-- Theme Styles -->
    <link href="{{ asset('backend/css/alpha.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <input type="text" name="tokenCsrf" id="tokenCsrf" value="{{ Session::token() }}" hidden="">
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="alpha-app">
        <div class="page-header">
            <nav class="navbar navbar-expand primary">
                <section class="material-design-hamburger navigation-toggle">
                    <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse material-design-hamburger__icon">
                        <span class="material-design-hamburger__layer"></span>
                    </a>
                </section>
                <a class="navbar-brand" href="#">{{ Setting('title')->content }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0 search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
                        <label for="search" class="active"><i class="material-icons search-icon">search</i></label>
                        <a href="#" id="close-search-input"><i class="material-icons">close</i></a>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="d-md-block d-lg-none nav-item">
                            <a class="nav-link search-link" href="#"><i class="material-icons">search</i></a>
                        </li>
                        <li class="nav-item dropdown d-none d-lg-block">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications_none</i>
                                <span class="badge"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dd-notifications" aria-labelledby="navbarDropdown">
                                {{-- <li class="notification-drop-title">Today</li> --}}
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                            <div class="notification-text"><p><b>Developer</b> Installing Laravel Success</p><span>{{ Carbon\Carbon::parse(Setting('title')->created_at)->format('d M Y') }}</span></div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link right-sidebar-link" href="#"><i class="material-icons">more_vert</i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div><!-- Page Header -->
        <div class="search-results">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="search-results-header" style="padding: 0px 0px;margin-bottom: 20px">
                            <h4>Quick Search Settings Results</h4>
                            <a href="#" id="closeSearch"><i class="material-icons">close</i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    <div id="searchResult"></div>
                </div>
                </div>
            </div>
        </div><!-- Quick Search Results -->

        <!-- Left Sidebar -->

        @include('layouts.admin.partials.sidebar')

        <!-- Left Sidebar -->

        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div><!-- Page Content -->
        <div class="page-right-sidebar">
            <div class="page-right-sidebar-inner">
                <div class="right-sidebar-header">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="chat-tab" data-toggle="tab" href="#chat-content" role="tab" aria-controls="chat" aria-selected="true">Logs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings-content" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="sidebar-messages tab-pane fade show active" id="chat-content" role="tabpanel" aria-labelledby="chat-content">
                        <p class="right-sidebar-heading">User Logs Activity</p>
                        <div class="chat-list">
                            @foreach(Activity::orderBy('created_at', 'DESC')->where('causer_id', Auth::user()->id)->get() as $activity)
                                <?php 
                                $content = 'Not Slider';
                                if ($activity->description == 'created') {
                                    if ($activity->subject_type == 'App\Models\Slider') {
                                        $content = 'Create new slider data';
                                    }
                                    $icon = 'add';
                                }elseif ($activity->description == 'updated') {
                                    if ($activity->subject_type == 'App\Models\Slider') {
                                        $content = 'Update exist slider data';
                                    }
                                    $icon = 'update';
                                }elseif ($activity->description == 'deleted') {
                                    if ($activity->subject_type == 'App\Models\Slider') {
                                        $content = 'Delete exist slider data';
                                    }
                                    $icon = 'delete';
                                }

                                ?>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <div class="report-icon"><i class="material-icons">{{ $icon }}</i></div>
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">{{ $activity->log_name }}</p>
                                        <span class="chat-message">{{ $content }}</span>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="settings-content" role="tabpanel" aria-labelledby="settings-content">
                            <p class="right-sidebar-heading">SYSTEM</p>
                            <div class="settings-list">
                            </div>
                            <p class="right-sidebar-heading">ACCOUNT</p>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Save History</div>
                                    <div class="setting-set">
                                        <div class="material-switch pull-right">
                                            <input id="set-7" name="someSwitchOption001" type="checkbox"/>
                                            <label for="set-7" class="label-default"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Right Sidebar (CHAT & SETTINGS) -->
            <div class="chat-sidebar">
                <p class="sidebar-chat-name">Tom Simpson<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
                <div class="messages-container">
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="{{ asset('backend/images/avatars/avatar1.png') }}" class="circle" alt=""></div>
                        <div class="text-wrapper">Lorem Ipsum</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="{{ asset('backend/images/avatars/avatar2.png') }}" class="circle" alt=""></div>
                        <div class="text-wrapper">Integer in faucibus diam?</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="{{ asset('backend/images/avatars/avatar1.png') }}" class="circle" alt=""></div>
                        <div class="text-wrapper">Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="{{ asset('backend/images/avatars/avatar2.png') }}" class="circle" alt=""></div>
                        <div class="text-wrapper">Suspendisse condimentum tortor et lorem pretium</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="{{ asset('backend/images/avatars/avatar1.png') }}" class="circle" alt=""></div>
                        <div class="text-wrapper">dolore eu fugiat nulla pariatur</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="{{ asset('backend/images/avatars/avatar2.png') }}" class="circle" alt=""></div>
                        <div class="text-wrapper">Duis maximus leo eget massa porta</div>
                    </div>
                </div>
                <div class="message-compose-box">
                    <div class="input-field">

                        <div class="form-group">
                            <label for="message_compose">Write message</label>
                            <input placeholder="Write message" id="message_compose" type="text">
                        </div>
                    </div>
                </div>
            </div><!-- Chat Sidebar -->
            
            
        </div><!-- App Container -->
        
        <!-- Javascripts -->
        <script src="{{ asset('backend/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/waves/waves.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>

        <!-- Custom Page JS -->
        @stack('js')
        
        <script src="{{ asset('backend/js/alpha.min.js') }}"></script>
        <script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                // "use strict";
                @if ($message = Session::get('success'))
                toastr.success('{{ $message }}')
                @endif
                @if ($message = Session::get('info'))
                toastr.info('{{ $message }}')
                @endif
                @if ($message = Session::get('warning'))
                toastr.warning('{{ $message }}')
                @endif
                @if ($message = Session::get('error'))
                toastr.error('{{ $message }}')
                @endif

                $('#search').on('keyup', function() {
                    var search = $(this).val();
                    var tokenCsrf = $('#tokenCsrf').val();
                    $.ajax({
                        url: '{{ route('..search.find') }}',
                        type: 'POST',
                        data: {
                            search : search,
                            _token : tokenCsrf,
                        },
                        success: function(html){
                            $("#searchResult").html(html);
                        },
                        error: function(html) {
                            $("#searchResult").html(html);
                        }
                    });

                });
            });
            
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-FV6JHGQ8YS"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-FV6JHGQ8YS');
        </script>
    </body>
    </html>