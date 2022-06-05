@include('backend/user/style')
<title>Semua Tentang Kita</title>
@include('backend/user/navbar2')
<!-- <div id="blog" class="our-blog section"> -->
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <h5>Semua Tentang Kita</h5>
                            <br>
                            <h6>Yoga</em><span> </span></h6>
                            <h6>Wulan</em><span> </span></h6>
                            <h6>Caca</em><span> </span></h6>
                            <h6>Salsha</em><span> </span></h6>
                            <p>.... <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent"></a>.</p>

                        </div>
                        <br>
                    </div>

                    <div class="col-lg-1">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ asset('user/assets/images/yoga.png')}}" width="60" height="80" alt="team meeting">
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ asset('user/assets/images/wulan.png')}}" width="50" height="80" alt="team meeting">
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ asset('user/assets/images/caca.png')}}" width="50" height="80" alt="team meeting">
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ asset('user/assets/images/salsha.png')}}" width="50" height="80" alt="team meeting">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

    <div class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>Semua <em>Tentang</em> <span>Kita</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="hidden-content">
                                <h4>Yoga Pratama</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="{{ asset('user/assets/images/yoga.png')}}" width="50" height="80" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="hidden-content">
                                <h4>Salsha Ristania</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="{{ asset('user/assets/images/salsha.png')}}" width="50" height="80" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="hidden-content">
                                <h4>Tri Wulandari</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="{{ asset('user/assets/images/wulan.png')}}" width="50" height="80" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="hidden-content">
                                <h4>Zahra Zaelani</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="{{ asset('user/assets/images/caca.png')}}" width="50" height="80" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('backend/user/footer')