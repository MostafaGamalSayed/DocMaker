
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-design-system" />

  <!-- End Google Tag Manager -->
  <!-- Favicon -->
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <!-- Icons -->
  <link href="{{ asset('assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

<!-- Theme CSS -->
<link type="text/css" href="{{ asset('assets/css/argon.min.css')}}" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="{{ asset('assets/css/docs.min.css') }}" rel="stylesheet">
</head>

<body id="app">
  <header class=" navbar navbar-expand navbar-dark flex-row align-items-md-center ct-navbar">
    <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap">
      DocsMaker
      <sup class="border-bottom">Air Forces</sup>
    </a>
    <div class="d-none d-sm-block ml-auto">
      <ul class="navbar-nav ct-navbar-nav flex-row align-items-center">

        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank">
            <i class="fa fa-dribbble"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank">
            <i class="fa fa-github"></i>
          </a>
        </li>
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

      </ul>
    </div>
  </header>
  <div class="container-fluid">
    <div class="row flex-xl-nowrap">
      @yield('sidebar')
      @yield('section-nav')
      <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 ct-content" role="main">
        @yield('content')
        <!-- <div class="ct-page-title">
          <h1 class="ct-title" id="content">Download</h1>
          <div class="avatar-group mt-3">
          </div>
        </div>
        <p class="ct-lead">Download Argon to get the compiled CSS and JavaScript, source code, or include it with your favorite package managers.</p>
        <hr>
        <h2 id="download">Download</h2>
        <ul>
          <li>
            <a href="https://github.com/creativetimofficial/argon-design-system/archive/master.zip">Download from Github</a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/product/argon-design-system">Download from Creative Tim</a>
          </li>
        </ul>
        <h2 id="package-managers">Package managers</h2>
        <ul>
          <li>
            <p>Install with Bower:
              <code class="highlighter-rouge">bower install argon-design-system</code>
            </p>
          </li>
          <li>
            <p>Install with Composer:
              <code class="highlighter-rouge">composer create-project creativetimofficial/argon-design-system</code>
            </p>
          </li>
          <li>
            <p>Clone from Github:
              <code class="highlighter-rouge">git clone https://github.com/creativetimofficial/argon-design-system.git</code>
            </p>
          </li>
          <li>
            <p>Install with Npm:
              <code class="highlighter-rouge">npm i argon-design-system-free</code>
            </p>
          </li>
          <li>
            <p>Install with Yarn:
              <code class="highlighter-rouge">yarn add argon-design-system-free</code>
            </p>
          </li>
        </ul> -->
      </main>
    </div>
  </div>
  <!-- Core -->
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>

  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/headroom/headroom.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      // $('a[href="#"]:not([data-toggle="dropdown])').click(function() {
      // 	return false;
      // })
    })
  </script>
  <script>
    $(document).ready(function() {
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-46172202-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();

      // Facebook Pixel Code Don't Delete
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }

    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
  <!-- Docs JS -->
   <script src="{{ asset('assets/js/vendor/anchor.min.js') }}"></script>
   <script src="{{ asset('assets/js/vendor/clipboard.min.js') }}"></script>
   <script src="{{ asset('assets/js/vendor/holder.min.js') }}"></script>
   <script src="{{ asset('assets/js/vendor/prism.min.js') }}"></script>
   <script src="{{ asset('assets/js/docs.min.js') }}"></script>




<!-- Theme JS -->
<script src="{{ asset('assets/js/argon.min.js') }}"></script>
  </script>
</body>

</html>
