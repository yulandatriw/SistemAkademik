@include('backend/user/style')
<title>INFORMASI WISUDA</title>
@include('backend/user/navbar2')
<!-- <div id="blog" class="our-blog section"> -->
<div id="blog" class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <h6>Informasi Wisuda</h6>
                            <h2>...</em><span> </span></h2>
                            <p>.... <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent"></a>.</p>
                            <form id="search" action="#" method="GET">
                                <fieldset>
                                    <input type="address" name="address" class="email" placeholder="Cari..." autocomplete="on" required>
                                </fieldset>
                                <fieldset>
                                    <button type="submit" class="main-button">Cari</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ asset('user/assets/images/banner-right-image.png')}}" alt="team meeting">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('backend/user/footer')