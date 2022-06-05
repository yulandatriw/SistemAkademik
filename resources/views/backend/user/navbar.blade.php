<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ asset('index.html')}}" class="logo">
                        <h4>Si<span>Akademik</span></h4>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{url('/homeuser')}}">Beranda</a></li>
                        <li class="scroll-to-section"><a href="{{url('/tentang')}}">Tentang</a></li>
                        <li class="scroll-to-section"><a href="{{url('/akademik')}}">Akademik</a></li>
                        <!-- <li class="scroll-to-section"><a href="#portfolio">Layanan</a></li> -->
                        <li class="scroll-to-section"><a href="#blog">Blog</a></li>
                        <!-- <li class="scroll-to-section"><a href="#contact">Hubungi Kami</a></li> -->
                        <li class="scroll-to-section">
                            <div class="main-red-button"><a href="{{ route('logout') }}">Logout</a></div>
                            <!-- <li><a href="{{ route('logout') }}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li> -->
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->