@extends('_layouts.master')

@section('title', 'Beranda')

@section('body')

    @include('_partials.slider')

    <!--================Main Feature Area =================-->
    <section class="main_feature_area">
        <div class="left_feature_content">
            <div class="left_feature_inner_text">
                <div class="media">
                    <div class="media-left">
                        <img class="svg social-link" src="img/icon/svg/pointer.svg" alt="" />
                    </div>
                    <div class="media-body">
                        <a href="#">
                            <h4>Online Booking</h4>
                        </a>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="svg social-link" src="img/icon/svg/warehouse.svg" alt="" />
                    </div>
                    <div class="media-body">
                        <a href="#">
                            <h4>Online Booking</h4>
                        </a>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="svg social-link" src="img/icon/svg/route.svg" alt="" />
                    </div>
                    <div class="media-body">
                        <a href="#">
                            <h4>Online Booking</h4>
                        </a>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="svg social-link" src="img/icon/svg/delivery-truck2.svg" alt="" />
                    </div>
                    <div class="media-body">
                        <a href="#">
                            <h4>Online Booking</h4>
                        </a>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="svg social-link" src="img/icon/svg/flight.svg" alt="" />
                    </div>
                    <div class="media-body">
                        <a href="#">
                            <h4>Online Booking</h4>
                        </a>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="svg social-link" src="img/icon/svg/telemarketer.svg" alt="" />
                    </div>
                    <div class="media-body">
                        <a href="#">
                            <h4>Online Booking</h4>
                        </a>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right_feature_image">
            <img src="img/feature-right.jpg" alt="">
        </div>
    </section>
    <!--================End Main Feature Area =================-->

    <!--
    <section class="our_blog_area">
        <div class="container">
            <div class="main_title">
                <h5>LATEST NEWS</h5>
                <h2>FROM OUR BLOG</h2>
            </div>
            <div class="row our_blog_inner">
                <div class="col-md-4">
                    <div class="our_blog_item">
                        <div class="our_blog_img">
                            <img src="img/blog/our-blog/our-blog-1.jpg" alt="">
                            <div class="b_date">
                                <h6>JULY</h6>
                                <h5>25</h5>
                            </div>
                        </div>
                        <div class="our_blog_content">
                            <a href="blog-details.html">
                                <h4>QUALITY CARGO SERVICES AT AFFORDABLE PRICE</h4>
                            </a>
                            <p>Dramatically transition clicks-and-mortar portals before diverse leadership skills. Monotonectally recaptiualize fully tested information after.</p>
                            <h6><a href="#">Frank Martin</a><span>•</span><a href="#">9 Comments</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_blog_item">
                        <div class="our_blog_img">
                            <img src="img/blog/our-blog/our-blog-2.jpg" alt="">
                            <div class="b_date">
                                <h6>JULY</h6>
                                <h5>12</h5>
                            </div>
                        </div>
                        <div class="our_blog_content">
                            <a href="blog-details.html">
                                <h4>WHY CHOOSE OUR WAREHOUSING SERVICE?</h4>
                            </a>
                            <p>Dramatically transition clicks-and-mortar portals before diverse leadership skills. Monotonectally recaptiualize fully tested information after.</p>
                            <h6><a href="#">Frank Martin</a><span>•</span><a href="#">9 Comments</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_blog_item">
                        <div class="our_blog_img">
                            <img src="img/blog/our-blog/our-blog-3.jpg" alt="">
                            <div class="b_date">
                                <h6>June</h6>
                                <h5>07</h5>
                            </div>
                        </div>
                        <div class="our_blog_content">
                            <a href="blog-details.html">
                                <h4>TOP BENEFITS OF HIRING OUR <br class="b_title_br" />TRUCKING SERVICE</h4>
                            </a>
                            <p>Dramatically transition clicks-and-mortar portals before diverse leadership skills. Monotonectally recaptiualize fully tested information after.</p>
                            <h6><a href="#">Frank Martin</a><span>•</span><a href="#">9 Comments</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

    <!--================Get Quote Area =================-->
    <section class="get_quote_area">
        <div class="container">
            <div class="pull-left">
                <h4>Providing Smart Logistic Solution Across The World</h4>
            </div>
            <div class="pull-right">
                <a class="b_get_btn" href="request-quote.html">Get a Quote <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </section>
    <!--================End Get Quote Area =================-->

    <!--================Testimonials Area =================-->
    <section class="testimonials_area">
        <div class="container">
            <div class="testimonials_inner">
                <div class="testimonials_slider owl-carousel">
                    <div class="item">
                        <img class="img-circle" src="img/testimonials/testimonials-1.png" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.</p>
                        <h4>Steve Jobs</h4>
                    </div>
                    <div class="item">
                        <img class="img-circle" src="img/testimonials/testimonials-1.png" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.</p>
                        <h4>Jon Anderson</h4>
                    </div>
                    <div class="item">
                        <img class="img-circle" src="img/testimonials/testimonials-1.png" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.</p>
                        <h4>Steve Jobs</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Testimonials Area =================-->

    <!--================About Us Area =================-->
    <section class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_left_text">
                        <h3 class="single_title">TENTANG KAMI</h3>
                        <p>Didirikan di Indonesia, PT. Antar Nusa Raya Ekspress memiliki operasi di seluruh Kalimantan. Kantor pusat regionalnya berlokasi di Banjarmasin yang berfungsi sebagai pusat Kalimantan Selatan dan Tengah. Kami memiliki jaringan luas kantor internasional kami sendiri dan afiliasi yang berdedikasi di seluruh dunia.</p>
                        <p>Kami adalah penyedia solusi logistik terkemuka yang berkomitmen untuk memberikan layanan terbaik. Dengan pengalaman bertahun-tahun dalam industri ini, kami telah membangun reputasi sebagai mitra yang dapat diandalkan untuk semua kebutuhan pengiriman Anda. Tim kami yang berdedikasi bekerja tanpa henti untuk memastikan setiap paket tiba dengan aman dan tepat waktu.</p>
                        <a class="more_btn" href="/about">PELAJARI LEBIH LANJUT <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="single_title">LOKASI KAMI</h4>
                    <!-- Configure Your Global Locations in /js/locations.js -->
                    <div id="jvectormap"></div>
                </div>
            </div>
        </div>
    </section>
    <!--================End About Us Area =================-->

    <!--================Gallery Area =================-->
    <section class="gallery_area">
        <div class="container">
            <div class="col-md-7">
                <div class="left_gallery_area">
                    <h3 class="single_title">Gallery</h3>
                    <div class="l_gallery_inner zoom-gallery">
                        <div class="l_gallery_item">
                            <a href="img/gallery/gallery-big-1.jpg">
                                <img src="img/gallery/gallery-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="l_gallery_item">
                            <a href="img/gallery/gallery-big-2.jpg">
                                <img src="img/gallery/gallery-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="l_gallery_item">
                            <a href="img/gallery/gallery-big-3.jpg">
                                <img src="img/gallery/gallery-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="l_gallery_item">
                            <a href="img/gallery/gallery-big-4.jpg">
                                <img src="img/gallery/gallery-4.jpg" alt="">
                            </a>
                        </div>
                        <div class="l_gallery_item">
                            <a href="img/gallery/gallery-big-5.jpg">
                                <img src="img/gallery/gallery-5.jpg" alt="">
                            </a>
                        </div>
                        <div class="l_gallery_item">
                            <a href="img/gallery/gallery-big-6.jpg">
                                <img src="img/gallery/gallery-6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="right_faq_area">
                    <h3 class="single_title">FAQ</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Bagaimana klien kami melacak pengiriman?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Klien kami dapat dengan mudah melacak pengiriman mereka melalui fitur "Pelacakan Kargo" di situs web kami. Cukup masukkan nomor pelacakan unik Anda di kolom yang tersedia, dan Anda akan mendapatkan pembaruan status real-time tentang lokasi dan perkiraan waktu kedatangan paket Anda.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Jenis asuransi apa yang Anda berikan untuk paket?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Kami menyediakan berbagai opsi asuransi untuk melindungi paket Anda dari risiko kerusakan atau kehilangan selama transit. Pilihan asuransi bervariasi tergantung pada nilai barang dan jenis layanan pengiriman yang dipilih. Silakan hubungi tim dukungan kami untuk detail lebih lanjut tentang cakupan asuransi yang tersedia.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Bagaimana saya bisa melakukan pembayaran, Apa aturan pengembalian dana Anda?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Kami menerima berbagai metode pembayaran termasuk transfer bank, kartu kredit, dan dompet digital. Untuk aturan pengembalian dana, kami memiliki kebijakan yang jelas tergantung pada kondisi pembatalan atau masalah pengiriman. Detail lengkap mengenai prosedur pembayaran dan kebijakan pengembalian dana dapat ditemukan di halaman Syarat & Ketentuan kami.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingfour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        Mengapa tarif Anda sangat rendah dibandingkan yang lain?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                <div class="panel-body">
                                    Kami bangga dapat menawarkan tarif yang kompetitif tanpa mengorbankan kualitas layanan. Efisiensi operasional kami, jaringan yang luas, dan optimalisasi rute memungkinkan kami untuk menekan biaya dan memberikan nilai terbaik kepada pelanggan kami. Kami percaya pada transparansi harga dan layanan yang terjangkau.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingfive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        Saya punya pertanyaan lain yang tidak tercantum di sini
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                <div class="panel-body">
                                    Jika Anda memiliki pertanyaan lain yang belum tercantum di sini, jangan ragu untuk menghubungi tim dukungan pelanggan kami. Anda bisa menghubungi kami melalui telepon, email, atau formulir kontak di halaman "Hubungi Kami". Kami selalu siap membantu Anda dengan informasi yang Anda butuhkan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Gallery Area =================-->

    <!--================Client Slider Area =================-->
    <section class="client_logo_area">
        <div class="container">
            <div class="client_slider owl-carousel">
                <div class="item">
                    <img src="img/client-logo/client-1.png" alt="">
                </div>
                <div class="item">
                    <img src="img/client-logo/client-2.png" alt="">
                </div>
                <div class="item">
                    <img src="img/client-logo/client-3.png" alt="">
                </div>
                <div class="item">
                    <img src="img/client-logo/client-4.png" alt="">
                </div>
                <div class="item">
                    <img src="img/client-logo/client-5.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--================End Client Slider Area =================-->

@endsection
