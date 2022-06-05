@include('backend/user/style')
<title>INFORMASI WISUDA</title>
@include('backend/user/navbar2')
<div id="contact" class="contact-us section">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <div class="section-heading">
                    <h2>Mata Kuliah Favorit Mahasiswa Universitas Januari</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor incididunt ut labore et dolores</p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <!-- <div class="table-responsive"> -->
                <form id="contact" action="" method="post">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <!-- <th>NO</th> -->
                                    <!-- <th>ID</th> -->
                                    <th>NAMA MATA KULIAH</th>
                                    <th>SEMESTER</th>
                                    <th>SKS</th>
                                    <th>KETERANGAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($matakuliah as $p)
                                <tr>
                                    <!-- <td></td> -->
                                    <!-- <td>{{ $p->idmakul }}</td> -->
                                    <td>{{ $p->namamakul }}</td>
                                    <td>{{ $p->semester }}</td>
                                    <td>{{ $p->sks }}</td>
                                    <td>{{ $p->keterangan }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>


                        <!-- <div class="col-lg-6">
                            <fieldset>
                                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                            </fieldset>
                        </div> -->
                    </div>
                    <div class="contact-dec">
                        <img src="{{ asset('user/assets/images/contact-decoration.png')}}" alt="">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@include ('backend/user/footer')